<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
        /**
     *  Home
     *  @param request
     *  @param return response
     */
    public function index()
    {
        return view('frontend.about');
    }
}
