<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $tes = Cuti::where("tertuju", auth()->user()->role)->get();
        return view('home', ['title' => 'Dashboard || Home', 'subtitle' => 'Home', 'users' => User::all(), 'user' => $request->user(), 'cuti' => $tes]);
    }
    public function users(Request $request)
    {
        return view('semua', ['title' => 'Users || Home', 'subtitle' => 'Semua Users', 'users' => User::all()]);
    }
    public function pdf(Request $request)
    {
        $pdf = Pdf::loadView('pdf', ['user' => auth()->user()]);
        return $pdf->stream('invoice.pdf');
    }
}
