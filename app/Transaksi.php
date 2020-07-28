<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi_pinjambuku";
    protected $primaryKey = "id";
    protected $fillable = ["perpus_id","buku_id","petugas_id","siswa_id","no_buku",
                            "tgl_pinjam","tgl_kembali","terpinjam_st","kembali_st","note"];

    public function perpustakaan()
    {
      return $this->belongsTo("App\Perpustakaan", "perpus_id", "id");
    }
    public function siswa()
    {
      return $this->belongsTo("App\Siswa", "siswa_id", "id");
    }
    public function petugas()
    {
      return $this->belongsTo("App\Petugas", "petugas_id", "id");
    }
    public function buku()
    {
      return $this->belongsTo("App\Buku", "buku_id", "id");
    }
}

