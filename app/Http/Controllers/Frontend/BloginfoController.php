<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BloginfoController extends Controller
{
    public function blogIndex(){
        return view('Frontend.master');
    }
}
