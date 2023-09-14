@extends('layouts.master')

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

@section('title', 'Halaman Profile')

@section('content')
    @if ($data)
        <div class="container-profile">
            <img src="{{ $data->foto }}" alt="foto" width="400" height="400">
            <div class="box-data-diri">
                <h1>Profil {{ $data->user_name }}</h1>
                <h4>Id: {{ $data->id }}</h4>
                <h4>Nama: {{ $data->user_name }}</h4>
                <h4>Umur: {{ $data->umur }}</h4>
                <h4>Alamat: {{ $data->alamat }}</h4>
                <div class="hobi">
                    <h4>Hobi: {{ $data->hobi }}</h4>
                    <ul>
                        {{-- @if ($data->hobi)

                        @endif --}}
                        {{-- @foreach ($data->hobi as $hobi)
                            <li>{{ $hobi }},</li>
                        @endforeach --}}
                    </ul>
                </div>
            </div>
        </div>
    @else
        <section class="grid-item">
            @for ($i = 1; $i <= $size; $i++)
                <x-text-box number="{{ $i }}" />
            @endfor
        </section>
    @endif

@endsection
{{-- {{$data}} --}}
