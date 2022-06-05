<?php

namespace App\Http\Controllers\Demo\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //index
    public function index(){
        return view('demo.user.index');
    }
}
