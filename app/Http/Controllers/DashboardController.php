<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    public function index(Request $request)
    {    
        // dd($request->user());
        return view('home',['title' => 'Dashboard || Home','subtitle' => 'Home','users' => User::all(),'user'=> $request->user(), 'cuti' => Cuti::all()]);
    }
    public function users(Request $request)
    {    
        return view('semua',['title' => 'Users || Home','subtitle' => 'Semua Users','users' => User::all()]);
    }
    public function generatePDF(Request $request)
    { $data = [
        'name' => auth()->user()->name,
    ];
        $pdf = Pdf::loadView('generatePDF', $data);
        return $pdf->stream('invoice.pdf');
    }
}
