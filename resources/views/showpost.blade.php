@extends('layouts.master')

@section('title', 'Show Post')

@section('content')

    @if (!$post)
        <h1>Data doesn't exits</h1>
    @else
        <h2>Judul : {{ $post->judul }}</h2>
        <h2>Deskripsi : {{ $post->deskripsi }}</h2>
    @endif


@endsection
