<?php

namespace App\Http\Controllers;

use App\Models\Komunitas;
use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function detail($k_slug, $id, $p_slug)
    {
        $komunitas = Komunitas::where('slug', $k_slug)->first();

        // get post with vote using decode id
        $post = Post::with('user', 'media', 'vote', 'comment')->where('id', Hashids::decode($id))->first();

        // get komentar with user
        $komentar = PostComment::with('user', 'replies.user')->where('post_id', $post->id)->get();

        return view('post.detail', compact('komunitas', 'post', 'komentar'));
    }
}
