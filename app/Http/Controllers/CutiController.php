<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Cuti;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user_year = substr($request->user()->nip,9,4);
        $user_month = substr($request->user()->nip,13,2);
        $targetDate = new DateTime($user_year."-".$user_month."-01");
        // Get today's date
        $today = new DateTime();
        // Calculate the difference in years using date diff
        $interval = $today->diff($targetDate);
        // Extract the number of years from the interval
        $yearsPassed = $interval->y;
        // Adjust for incomplete year if current month is before target month
        if ($today->format('m') < $targetDate->format('m')) {
          $yearsPassed--;
        }
        return view("cuti",['subtitle'=>'Pengajuan Cuti','title'=>'Dashboard || Pengajuan','cuti' => Cuti::where('user_id',$request->user()->id)->get(),'yearPassed' => $yearsPassed]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $targetDate = new DateTime($request->tanggal_mulai);
        // Get today's date
        $today = new DateTime($request->tanggal_akhir);
        // Calculate the difference in years using date diff
        $interval = $today->diff($targetDate);
        // Extract the number of years from the interval
        $total = $interval->days;   
        $request->validate([
            'tipe' => ['required','string'],
            'total_hak' => ['required','numeric','min:'.$total],
            'tanggal_mulai' =>[ 'required','date'],
            'tanggal_akhir' =>[ 'required','date'],
            'pesan' => ['required','string'],
        ]);
        $cuti = Cuti::create([
            'user_id' => auth()->user()->id,
            'tipe' => $request->tipe,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'total_cuti' => $total,
            'pesan' => $request->pesan,
        ]);
        return redirect()->route('cuti.index')->with('message', 'Selesai Regis');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Cuti $cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cuti $cuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cuti $cuti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuti $cuti)
    {
        //
    }
}
