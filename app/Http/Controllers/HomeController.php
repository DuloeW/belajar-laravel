<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DataDiri
{
    private $id;
    private $nama;
    private $umur;
    private $alamat;

    private $foto;

    private $hobi;

    public function __construct($id, $nama, $umur, $alamat, $foto, $hobi)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->umur = $umur;
        $this->alamat = $alamat;
        $this->foto = $foto;
        $this->hobi = $hobi;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }
    public function getDataId()
    {
        return $this->id;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getHobi()
    {
        return $this->hobi;
    }
}

class HomeController extends Controller
{
    public function index()
    {
        return view('/profile', ['data' => null, 'size' => $this->getSizeProfile()]);
    }

    public function getId($id)
    {
        return view('/profile', ['data' => $this->getProfilById($id)]);
    }

    public function createTest()
    {
        // $query = DB::table('users')->insertGetId(
        //     [
        //         'user_name' => Str::random(25),
        //         'password' => Str::random(10),
        //         'umur' => rand(12, 50),
        //         'alamat' => 'sumatra',
        //         'hobi' => 'Lari',
        //         'foto' => 'https://picsum.photos/400'
        //     ]
        // );
        return view('bayu');
    }

    private function getProfilById($id)
    {
        $users =  DB::table('users')->find($id);
        return $users ? $users : null;
    }

    private function getSizeProfile()
    {
        $users = DB::table('users')->get();
        return $users->count();
    }

    private function responseJson($exist, $data)
    {
        // $response = new Response();
        // $response->setContent(json_encode([
        //     'message' => $exist ? 'success' : 'failed',
        //     'status' => $exist ? 200 : 401,
        //     'data' => $exist ? $data : [],
        // ]));
        // $response->setStatusCode($exist ? 200 : 401);
        // $response->headers->set('Content-Type', 'application/json');
        // return $response;


        // return response()->header('Content-Type', 'application/json')->json([
        //         'message' => $exist ? 'success' : 'failed',
        //         'status' => $exist ? 200 : 401,
        //         'data' => $exist ? $data : [],
        //     ]);

        // $response = new JsonResponse();
        // $response->setContent(json_encode([
        //     'message' => $exist ? 'success' : 'failed',
        //     'status' => $exist ? 200 : 401,
        //     'data' => $exist ? $data : [],
        // ]));
        // $response->setStatusCode($exist ? 200 : 401);
        // $response->headers->set('Content-Type', 'application/json');

        // return $response;
    }
}
