<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PostController extends Controller
{
    public function index() {
        $post = Post::all();
        return view('post', ['posts'=> $post]);
    }

    public function createPost() {
        return view('createpost');
    }

    public function store(Request $request) {
        $post = new Post;
        $post->judul = $request->judul;
        $post->deskripsi = $request->deskripsi;
        $post->save();

        return redirect('/post')->with('succes', 'anjayyyyy');
    }

    public function show($id) {
        $post = Post::find($id);
        return view('showpost', ['post' => $post]);
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('editpost', ['post' => $post]);
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);
        $post->judul = $request->judul;
        $post->deskripsi = $request->deskripsi;
        $post->save();

        return redirect('/post/' . $id);
    }

    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();

        return redirect('/post');
    }


}
