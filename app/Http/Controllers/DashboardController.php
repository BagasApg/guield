<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function redirectToIndex(){
        return $this->index();
    }

    public function index(){
        return view('admin.dashboard');
    }
}
