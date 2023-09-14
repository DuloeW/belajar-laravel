@extends('layouts.master')

@section('title', 'Input user')

@section('content')
    <form action="/form" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Submit">
        <button type="submit">kirim</button>
    </form>
@endsection
