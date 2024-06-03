<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\User;
use Illuminate\Http\Request;
use function Pest\Laravel\get;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\App;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
    public function pdf($id)
    {
        $sign = QrCode::size(50)->generate('Diapproved oleh KasatPolPP');
        $cuti = Cuti::find($id);
        $user = User::where('role', $cuti->tertuju)->get();
        $user = $user[0];
        $pdf = Pdf::loadView('pdf', ['user' => auth()->user(), 'tertuju', 'cuti' => $cuti, 'tertuju' => $user, 'sign' => $sign]);
        return $pdf->stream($cuti->nip . '.pdf');
    }
    public function sekdis1($id)
    {
        $cuti = Cuti::find($id);
        return view('sekdis', ['title' => 'Sekdis', 'subtitle' => 'Catatan pertimbangan', 'cuti' => $cuti]);
    }
    public function sekdis(Request $request, $id)
    {
        $cuti = Cuti::find($id);
        $cuti->update([
            'sekdis' => $request->sekdis
        ]);
        return redirect()->route('dashboard')->with('success', 'Yeaay');
    }
}
