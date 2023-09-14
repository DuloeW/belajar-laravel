@extends('layouts.master')
@section('title', 'Edit Post')

@section('content')

    <form action="/post/{{ $post->id }}" method="post">
        @csrf
        @method('PUT')
        <label for="judul">Judul: </label>
        <input type="text" name="judul" id="judul" value="{{ $post->judul }}">

        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10">
            {{ $post->deskripsi }}
        </textarea>

        {{-- <button type="submit">Kirim</button> --}}
        <input type="submit" name="submit" value="Update">
    </form>

@endsection
