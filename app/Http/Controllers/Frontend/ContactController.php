<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
        /**
     *  Home
     *  @param request
     *  @param return response
     */
    public function index()
    {
        return view('frontend.contact');
    }
}
