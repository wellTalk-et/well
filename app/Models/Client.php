<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function plans(){
        return $this->belongsToMany(Plan::class);
    }

    public function consultations(){
        return $this->hasMany(Consultation::class);
    }


}
