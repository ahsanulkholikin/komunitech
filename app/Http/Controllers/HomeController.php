<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Komunitas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // check if user is logged in
        if (Auth::check()) {
            // get user id
            $user_id = Auth::user()->id;
            // get user komunitas using users function
            $komunitas = Komunitas::whereHas('users', function ($query) use ($user_id) {
                $query->where('user_id', $user_id);
            })->get();

            // recommended komunitas
            $recommended_komunitas = Komunitas::inRandomOrder()->whereNotIn('id', $komunitas->pluck('id'))->take(5)->get();
        } else {
            // get random recommended komunitas
            $recommended_komunitas = Komunitas::inRandomOrder()->take(5)->get();
        }

        return view('beranda.index', compact('recommended_komunitas'));
    }
}
