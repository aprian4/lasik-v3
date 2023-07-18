<?php

namespace App\Http\Controllers\simpeg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index()
    {
        return view('simpeg.pelatihan.index');
    }
}
