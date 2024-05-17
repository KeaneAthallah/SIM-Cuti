<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{
    public function index(Request $request)
    {    
        return view('home',['title' => 'Dashboard || Home','subtitle' => 'Home']);
    }
}
