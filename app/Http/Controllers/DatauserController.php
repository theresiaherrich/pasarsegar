<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatauserController extends Controller
{
    public function index(){
        return view('datauser.index');

    }
}