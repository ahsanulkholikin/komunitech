<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostComment;

class TestController extends Controller
{
    public function index()
    {
        // get all comments with replies
        $comments = PostComment::with('replies', 'user')->where('post_id', 5)->get();

        return view('test', compact('comments'));
    }
}
