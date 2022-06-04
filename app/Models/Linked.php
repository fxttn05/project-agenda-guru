<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linked extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function agenda(){
        return $this->hasMany(Agenda::class);
    }

    public function guru(){
        return $this->belongsTo(Guru::class);
    }

    public function mapel(){
        return $this->belongsTo(Mapel::class);
    }
}
