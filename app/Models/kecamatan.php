<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kec';
    protected $table = 'kecamatans';

    protected $fillable = [
        'id_kabupaten',
        'nama_kec',
      ];

    public function kabupatens(){
        return $this->belongsTo(kabupaten::class);
    }
}
