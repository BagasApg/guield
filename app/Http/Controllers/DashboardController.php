<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function redirectToIndex(){
        return $this->function
    }

    public function index(){
        return view('admin.dashboard');
    }
}
