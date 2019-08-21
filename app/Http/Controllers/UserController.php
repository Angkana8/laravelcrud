<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id){
        $sum = $id + 4;
        return view('user')->with('sum', $sum);
    }   

}
