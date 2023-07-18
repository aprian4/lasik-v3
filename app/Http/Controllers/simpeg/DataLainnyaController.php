<?php

namespace App\Http\Controllers\simpeg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataLainnyaController extends Controller
{
    public function index()
    {
        return view('simpeg.data-lainnya.index');
    }
}
