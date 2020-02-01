<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ImgupController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('imgup');
    }
}
