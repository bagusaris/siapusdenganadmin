<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pasien;
use App\Models\poli;
use App\Models\antrean;
class puskesmas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_puskesmas';
    protected $table = 'puskesmas';

    protected $fillable = [
        'nama_puskesmas',
        'email_puskesmas',
        'telp_puskesmas',
        'alamat_puskesmas',
        'foto_puskesmas',
        'jam_kerja',
      ];
      public function poli()
    {
        return $this->hasMany(poli::class, "id_puskesmas", "id_puskesmas");
    }
    public function pasien()
    {
        return $this->hasMany(pasien::class, "id_puskesmas", "id_puskesmas");
    }
    public function antrean()
    {
        return $this->hasMany(antrean::class, "id_puskesmas", "id_puskesmas");
    }
}
