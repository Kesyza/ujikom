<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $visible = ['nama_mapel_id', 'pilih_paket_id', 'soal', 'opsi_A', 'opsi_B', 'opsi_C', 'opsi_D', 'jawaban', 'keterangan'];
    protected $fillable = ['nama_mapel_id', 'pilih_paket_id', 'soal', 'opsi_A', 'opsi_B', 'opsi_C', 'opsi_D', 'jawaban', 'keterangan'];
    public $timestamps = true;

    public function mapel()
    {
        return $this->belongsTo('App\Models\MataPelajaran', 'nama_mapel_id');
    }

    public function paket()
    {
        return $this->belongsTo('App\Models\PaketSoal', 'pilih_paket_id');
    }

    public function ujian()
    {
        return $this->hasMany('App\Models\Ujian', 'soal_id');
    }
}
