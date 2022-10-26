<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;
use App\Models\Komunitas;
use App\Models\Post;

class PostList extends Component
{
    public $numResults = 5;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore()
    {
        $this->numResults += 5;
    }

    public function render()
    {
        if (Auth::check()) {
            // get user id
            $user_id = Auth::user()->id;
            // get user komunitas using users function
            $komunitas = Komunitas::whereHas('users', function ($query) use ($user_id) {
                $query->where('user_id', $user_id);
            })->get();
            // get komunitas post where komunitas id is in komunitas and short by created at desc
            $posts = Post::whereIn('komunitas_id', $komunitas->pluck('id'))->orderBy('created_at', 'desc')->take($this->numResults)->get();
            // get komunitas post detail
            $posts = $posts->load(['user', 'komunitas', 'vote', 'media', 'comment']);
            // encode komunitas post id
            $posts = $posts->map(function ($post) {
                $post->encoded_id = Hashids::encode($post->id);
                return $post;
            });

            // // recommended komunitas
            // $recommended_komunitas = Komunitas::whereNotIn('id', $komunitas->pluck('id'))->take(5)->get();
        } else {
            // get komunitas post and short by created at desc
            $posts = Post::orderBy('created_at', 'desc')->take($this->numResults)->get();
            // get komunitas post detail
            $posts = $posts->load(['user', 'komunitas', 'vote', 'media', 'comment']);
            // encode komunitas post id
            $posts = $posts->map(function ($post) {
                $post->encoded_id = Hashids::encode($post->id);
                return $post;
            });

            // // recommended komunitas
            // $recommended_komunitas = Komunitas::take(5)->get();
        }

        $this->dispatchBrowserEvent('loading-complete');
        return view('livewire.post-list', compact('posts'));
    }
}
