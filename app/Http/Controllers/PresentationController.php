<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PresentationController extends Controller
{
    public function index()
    {
        return view('site.presentation.index');
    }
}
