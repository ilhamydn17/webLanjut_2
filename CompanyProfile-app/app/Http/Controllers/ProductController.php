<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbel_edu()
    {
        return view('marbel-edu', [
            'titlePage' => 'Marbel-Edu',
            'titleTron' => 'Marbel - Education Games',
            'img' => 'jumbotron-edu.jpg',
        ]);
    }

    public function marbel_friends()
    {
        return view('marbel-friends', [
            'titlePage' => 'Marbel-Friends',
            'titleTron' => 'Marbel and Friends - Kids Games',
            'img' => 'jumbotron-friends.jpg',
        ]);
    }

    public function riri()
    {
        return view('riri', [
            'titlePage' => 'Riri - Story',
            'titleTron' => 'Riri - Story Books & Animations',
            'img' => 'jumbotron-riri.jpg',
        ]);
    }

    public function kolak()
    {
        return view('kolak', [
            'titlePage' => 'Kolak',
            'titleTron' => 'Kolak - Kids Song',
            'img' => 'jumbotron-kolak.jpg',
        ]);
    }
}
