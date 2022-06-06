<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function guruagenda(){
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }

    public function kelasagenda(){
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
