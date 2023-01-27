<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poli extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_poli';
    protected $table = 'polis';

    protected $fillable = [
        'id_puskesmas',
        'kode_poli',
        'nama_poli',
        'deskripsi_poli',
        'logo_poli'
      ];

    public function puskesmas(){
        return $this->belongsTo(puskesmas::class);
    }
}
