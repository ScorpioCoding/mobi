<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     *  Dashboard
     *  @param request
     *  @param return response
     */
    public function index()
    {
        return view('backend.dashboard');
    }
}
