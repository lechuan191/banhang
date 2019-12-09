<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getdashboard(){
        return view('admin.layout.index');
    }
}
