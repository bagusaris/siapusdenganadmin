<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\puskesmas;
use App\Models\poli;
class PuskesmasController extends Controller
{
    const FETCHED_ATTRIBUTE = [
        'nama_puskesmas',
        'email_puskesmas',
        'telp_puskesmas',
        'alamat_puskesmas',
        'foto_puskesmas',
        'jam_kerja',
    ];
    public function index()
    {
        //
        $puskesmas = puskesmas::all();
        return view('siapus.index', compact('puskesmas'));

    }

    public function get()
    {
        //
        $puskesmas = puskesmas::with(['poli', 'pasien','antrean.polis'])->get();
        return response()->json(array('code' => 200, 'message' => 'success', 'data' => $puskesmas));

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

    
    public function poli(Request $request)
    {
        $poli= poli::where('id_puskesmas', $request->id)->get();
        return response()->json($poli);
    }
}
