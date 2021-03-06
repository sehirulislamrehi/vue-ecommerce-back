<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Visitor extends Model
{
    use HasFactory;

    use Notifiable;


    public function invoice(){
        return $this->hasMany(Invoice::class);
    }

}
