<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $visible = ['nama_mapel'];
    protected $fillable = ['nama_mapel'];
    public $timestamps = true;

    public function soall()
    {
        return $this->hasMany('App\Models\Soal', 'pilih_paket_id');
    }
}
