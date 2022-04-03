<?php

namespace App\Http\Controllers\Demo\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Auth;
use DB;

class IndexController extends Controller
{
    public function Index(){

        //$roleData = Auth::user()->roles->pluck('name');
        //$ivcaData = Auth::user()->ivca_roles->pluck('name');
        // Merge collections
        //$roles = $roleData->merge($ivcaData);

        $roles = '';

        return view('demo.user.index', compact('roles'));
    }
}
