<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = "anggota";
    protected $primaryKey = "idAnggota";

    protected $fillable = ['UKM_idUKM', 'namaAnggota', 'NIMAnggota', 'jabatanAnggota', 'programStudiAnggota', 'statusAnggota'];
}
