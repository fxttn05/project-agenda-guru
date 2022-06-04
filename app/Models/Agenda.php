<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function linkedagenda(){
        return $this->belongsTo(Linked::class);
    }

    public function kelasagenda(){
        return $this->belongsTo(Kelas::class);
    }
}
