<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "id";
    protected $fillable = ["nis","nama_siswa","kelas","jurusan","status"];
}
