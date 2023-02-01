<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\antrean;
use Carbon\Carbon;

class AntreanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $antrean = Antrean::with(['polis', 'puskesmas', 'pasiens'])->get();
        
        // dd($antrean);

        return view('siapus.antreansaya', compact('antrean'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function saat_ini($id_poli, $id_puskesmas){
        $now = Carbon::now()->format('Y-m-d').'%';
        $saat_ini = Antrean::where('status','Dilayani')->where('id_puskesmas',$id_puskesmas)->where('id_poli',$id_poli)->where('created_at','like', $now)->limit(1)->get(); 
        // dd($id_poli, $id_puskesmas);
        // dd($now);
        return response()->json($saat_ini);
    }
}
