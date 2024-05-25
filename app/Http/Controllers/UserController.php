<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(){
        return view('users');
    }
    public function import(Request $request){
        $request->validate([
            'excel_file' => 'required|mimes:xlsx'
        ]);
    }

}