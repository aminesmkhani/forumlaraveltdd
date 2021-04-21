<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{

    public function index()
    {
        $threads = Thread::latest()->get();

        return view('forum.threads.index',compact('threads'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Thread $thread)
    {
        return view('forum.threads.show',compact('thread'));
    }


    public function edit(Thread $thread)
    {
        //
    }

    public function update(Request $request, Thread $thread)
    {
        //
    }


    public function destroy(Thread $thread)
    {
        //
    }
}
