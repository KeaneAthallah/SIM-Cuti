<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function list()
    {
        return view('users', ['title' => 'Upload', 'subtitle' => 'Upload excel to database']);
    }
    public function import(Request $request)
    {
        $request->validate([
            'excel' => 'required', 'mimes:xlsx'
        ]);
        Excel::import(new UsersImport, $request->file('excel'));
        return redirect('/')->with('success', 'All good!');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', '');
    }
}
