@extends('layouts.master')

@section('title', 'Bayu')

@section('content')

    <h1>ANYAA</h1>
    <input type="color" id="test1">
    <input type="color" id="test2">
    <button id="button">Change</button>
    

    <script>
        const inputColor1 = document.getElementById("test1");
        const inputColor2 = document.getElementById("test2");
        const button = document.getElementById("button");
        const body = document.body;

        button.addEventListener("click", () => {
            const selectedColor1 = inputColor1.value;
            const selectedColor2 = inputColor2.value;
            body.style.background = `linear-gradient(75deg, ${selectedColor1}, ${selectedColor2})`;
        });
    </script>

@endsection
