<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin Home Page
    public function adminHome(){
        return view('admin.home.list');
    }
}
