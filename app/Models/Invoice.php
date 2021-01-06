<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public function invoice_products(){
        return $this->hasMany(InvoiceProduct::class);
    }

    public function visitor(){
        return $this->belongsTo(Visitor::class);
    }
}
