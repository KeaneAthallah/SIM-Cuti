<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function list(){
        return view('users');
    }
    public function import(Request $request){
        $request->validate([
            'excel' => 'required','mimes:xlsx'
        ]);
        Excel::import(new UsersImport, $request->file('excel'));
        return redirect('/')->with('success', 'All good!');
    }

}