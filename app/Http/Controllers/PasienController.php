<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;
use App\Models\puskesmas;
use App\Models\poli;
use App\Models\antrean;
use App\Models\provinsi;
use App\Models\kabupaten;
use App\Models\kecamatan;
use App\Models\desa;

use Illuminate\Support\Facades\Http;

class PasienController extends Controller
{
    const FETCHED_ATTRIBUTE = [
        'id_puskesmas',
        'id_poli',
        'nik',
        'nama_pasien',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'alamat',
    ];
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $puskesmas = puskesmas::all();
        $provinsi= provinsi::all();
        return view('siapus.pendaftaranantrean', compact('puskesmas', 'provinsi'));
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
        // dd('ss');
        $data = $request->only(self::FETCHED_ATTRIBUTE);
        $validatedData=$request->validate([
            'nik' =>'required|unique:pasiens',
        ]);
        
        $find_puskesmas=poli::where('id_puskesmas',$data['id_puskesmas'])->get();//poli sesuai puskesmas
       
        foreach ($find_puskesmas as $item_puskesmas) {
            if($data['id_poli']==$item_puskesmas->id_poli){
                $uuid = $item_puskesmas->kode_poli . '0001';
                $no = 1;
                $find_antrian = antrean::where('id_poli', $data['id_poli'])->where('id_puskesmas',$data['id_puskesmas'])->orderByDesc('nomer')->first();
                
                if ($find_antrian) {
                    $current_number = explode($item_puskesmas->kode_poli,$find_antrian->nomer);
                    $digit=strlen($current_number[0]+1);
                    if ($digit == 1) {
                        $uuid = $item_puskesmas->kode_poli . '000' . $digit + 1;
                        $no= $digit + 1;
                    } else if ($digit == 2) {
                        $uuid = $item_puskesmas->kode_poli . '00' . $digit + 1;
                        $no= $digit + 1;
                    } else if ($digit == 3) {
                        $uuid = $item_puskesmas->kode_poli . '0' . $digit + 1;
                        $no= $digit + 1;
                    } else if ($digit == 4) {
                        $uuid = $item_puskesmas->kode_poli . $digit + 1;
                        $no= $digit + 1;
                    }
                }
                $pasien = pasien::create($data);
                $antrean = antrean::create([
                    'nomor_antrean' => $uuid,
                    'nomer'=>$no,
                    'status' => 'Menunggu',
                    'id_puskesmas' => $data['id_puskesmas'],
                    'id_poli' => $data['id_poli'],
                    'id_pasien' => $pasien->id_pasien,
                ]);
            }
        }
        
        

        return redirect('/tiket');
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
    public function kabupaten(Request $request)
    {
        $kab =kabupaten::where('id_prov', $request->id)->get();
        return response()->json($kab);
    }
    public function kecamatan(Request $request)
    {
        $kec = kecamatan::where('id_kabupaten', $request->id)->get();
        return response()->json($kec);
    }
    public function desa(Request $request)
    {
        $des = desa::where('id_kecamatan', $request->id)->get();
        return response()->json($des);
    }
}
