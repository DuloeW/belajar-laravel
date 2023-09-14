<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FormController extends Controller
{
    public function form()
    {
        return view('form', ['data' => null]);
    }

    public function store(Request $request)
    {
        $name = $request->input('name');

        $query = DB::table('users')->insertGetId(
            [
                'user_name' => Str::random(25),
                'password' => Str::random(10),
                'umur' => rand(12, 50),
                'alamat' => 'sumatra',
                'hobi' => 'Lari',
                'foto' => 'https://picsum.photos/400'
            ]
        );

        return redirect()->route('profile')->with('succes', 'Cok');
        // return view('form', ['data' => $name]);
        // return view('form', ['data' => $query]);
    }
}
