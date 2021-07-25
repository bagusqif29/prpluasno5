<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function about()
    {

        return view('about',['nama'=>'Bagus Qori Firmansyah','NIM'=>1900018196, 'kelas'=>'D', 'matkul'=>'PRPL 2021']);
    }
}
