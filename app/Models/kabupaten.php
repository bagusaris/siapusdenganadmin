<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kab';
    protected $table = 'kabupatens';

    protected $fillable = [
        'id_prov',
        'nama_kab',
      ];

    public function provinsis(){
        return $this->belongsTo(provinsi::class);
    }
}
