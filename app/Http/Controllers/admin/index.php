<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class index extends Controller
{
    function index(){
        return view('admin.index');
    }
}
