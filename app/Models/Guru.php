<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function linkedguru(){
        return $this->hasOne(Linked::class);
    }

    public function kelasguru(){
        return $this->hasOne(Kelas::class);
    }

    public function userguru(){
        return $this->belongsTo(User::class);
    }
}
