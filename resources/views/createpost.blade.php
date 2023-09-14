@extends('layouts.master')

@section('title', 'Create Post')

@section('content')

    <form action="/post" method="post">
        @csrf
        <label for="judul">Judul: </label>
        <input type="text" name="judul" id="judul">

        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>

        {{-- <button type="submit">Kirim</button> --}}
        <input type="submit" name="submit" value="Create">
    </form>

@endsection
