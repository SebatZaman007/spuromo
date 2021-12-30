<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BloginfoController extends Controller
{
    public function adminLogin(){
        return view('Admin.master');
    }
}
