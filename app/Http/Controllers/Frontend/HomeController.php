<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     *  Home
     *  @param request
     *  @param return response
     */
    public function index()
    {
        return view('frontend.home');
    }
}
