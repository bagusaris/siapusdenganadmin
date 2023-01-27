<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pasien';
    protected $table = 'pasiens';

    protected $fillable = [
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
    

    public function puskesmas(){
        return $this->belongsTo(puskesmas::class);
    }
    public function polis(){
        return $this->belongsTo(poli::class);
    }
    public function antreans(){
        return $this->hasOne(antrean::class);
    }
}
