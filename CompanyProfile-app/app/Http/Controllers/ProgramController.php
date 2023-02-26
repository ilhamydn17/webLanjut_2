<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir()
    {
        return view('karir', [
            'titlePage' => 'Karir',
            'titleTron' => 'Karir',
            'img' => 'jumbotron-karir.jpg',
        ]);
    }

    public function magang()
    {
        return view('magang', [
            'titlePage' => 'Magang',
            'titleTron' => 'Magang',
            'img' => 'jumbotron-magang.jpg',
        ]);
    }

    public function kunjungan_industri()
    {
        return view('industri', [
            'titlePage' => 'Kunjungan',
            'titleTron' => 'Kunjungan Industri',
            'img' => 'jumbotron-kunjungan.jpg',
        ]);
    }
}
