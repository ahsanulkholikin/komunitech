<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komunitas;
use App\Models\Post;

class KomunitasController extends Controller
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
     * @param  \App\Models\Komunitas  $komunitas
     * @return \Illuminate\Http\Response
     */
    public function show(Komunitas $komunitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komunitas  $komunitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Komunitas $komunitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komunitas  $komunitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komunitas $komunitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komunitas  $komunitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komunitas $komunitas)
    {
        //
    }

    public function list()
    {
        $komunitas = Komunitas::with('users')->get();
        return view('komunitas.list', compact('komunitas'));
    }

    public function detail($slug)
    {
        $komunitas = Komunitas::where('slug', $slug)->with('users')->first();

        // get post using komunitas id
        $posts = Post::where('komunitas_id', $komunitas->id)->with('user', 'media', 'vote', 'comment')->get();

        return view('komunitas.detail', compact('komunitas', 'posts'));
    }
}
