<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_desa';
    protected $table = 'desas';

    protected $fillable = [
        'id_kecamatan',
        'nama_desa',
      ];

    public function kecamatans(){
        return $this->belongsTo(kecamatan::class);
    }
}
