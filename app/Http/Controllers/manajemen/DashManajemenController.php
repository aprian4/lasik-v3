<?php

namespace App\Http\Controllers\manajemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashManajemenController extends Controller
{
    public function index()
    {
        return view('manajemen.dashboard');
    }
}
