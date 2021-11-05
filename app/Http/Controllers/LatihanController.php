<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function depan ()
    {
        return view('tes'); 
        // ini adalah tampilan awal website
    }
    public function heading ()
    {
        return view('heading'); 
        // ini adalah judul dan subjudul
    }
}
