<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "master_buku";
    protected $primaryKey = "id";
    protected $fillable = ["nama_buku","no_buku","deskripsi","kategori_buku","status"];
}
