<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function agendakelas(){
        return $this->hasMany(Agenda::class);
    }

    public function gurukelas(){
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}
