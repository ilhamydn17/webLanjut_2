<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $str += 'NIM : 2141720091';
        $str += '<br>';
        $str += 'NAMA : Ilham Yudantyo';

        return $str;
    }
}
