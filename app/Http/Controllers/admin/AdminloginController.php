<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminloginController extends Controller
{
    // Define the index method
    public function index()
    {
        return view('admin.login');
    }
        
}