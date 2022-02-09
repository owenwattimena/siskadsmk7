<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saranmasukan extends Model
{
    use HasFactory;

    protected $table = 'saran_masukan';



    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id' , 'id');
    }
}
