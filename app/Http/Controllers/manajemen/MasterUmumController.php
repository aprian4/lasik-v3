<?php

namespace App\Http\Controllers\manajemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterUmumController extends Controller
{
    public function index()
    {
        return view('manajemen.simpeg.data-master.master-umum');
    }
}
