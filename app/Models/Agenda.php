<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function guruagenda(){
        return $this->belongsTo(Guru::class);
    }

    public function kelasagenda(){
        return $this->belongsTo(Kelas::class);
    }
}
