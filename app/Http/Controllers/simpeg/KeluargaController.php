<?php

namespace App\Http\Controllers\simpeg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index()
    {
        return view('simpeg.keluarga.index');
    }
}
