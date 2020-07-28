<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    protected $table = "perpustakaan";
    protected $primaryKey = "id";
    protected $fillable = ["id","nama","jam_buka","jam_tutup"];
}
