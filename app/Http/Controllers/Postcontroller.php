<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function details($id){
        return "<h1>Detail</h1>";
    }
}
