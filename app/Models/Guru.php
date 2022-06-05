<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function agendaguru(){
        return $this->hasMany(Agenda::class);
    }

    public function kelasguru(){
        return $this->hasOne(Kelas::class);
    }

    public function userguru(){
        return $this->belongsTo(User::class);
    }

    public function mapelguru(){
        return $this->belongsTo(Mapel::class);
    }

}
