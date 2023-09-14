@extends('layouts.master')

@section('title', 'Halaman post')
@section('content')
    @foreach ($posts as $post)
        <br>
        <a href="/post/{{ $post->id }}/edit">{{ $post->judul }}</a>

        <form action="/post/{{ $post->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" name="submit" value="Delete">
        </form>
    @endforeach
@endsection
