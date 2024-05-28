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
        $user_month = substr($request->user()->nip,12,2);
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
        return view("cuti",['subtitle'=>'Pengajuan Cuti','title'=>'Dashboard || Pengajuan','user' => $request->user(),'yearPassed' => $yearsPassed]);
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
        $request->validate([
            'tipe' => ['required','string'],
            'tanggal_mulai' =>[ 'required','date'],
            'tanggal_akhir' =>[ 'required','date'],
            'pesan' => ['required','string'],
        ]);
        $targetDate = new DateTime($request->tanggal_mulai);
        // Get today's date
        $today = new DateTime($request->tanggal_akhir);
        // Calculate the difference in years using date diff
        $interval = $today->diff($targetDate);
        // Extract the number of years from the interval
        $total = $interval->days;
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
