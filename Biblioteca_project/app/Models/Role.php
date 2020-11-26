<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
CONST ADMIN =1;
CONST STUDENT =2;

    use HasFactory, Notifiable;
//es: Desde aqui

public function users(){
    return $this->belongsToMany('\App\Models\User')->withTimestamps();
}

public function permissions(){
    return $this->belongsToMany('\App\Models\permission')->withTimestamps();
}

}
