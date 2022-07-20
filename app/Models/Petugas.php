<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    public function tugas(){
        return $this->hasOne(Tugas::class,'id','tugas_id');
    }
}
