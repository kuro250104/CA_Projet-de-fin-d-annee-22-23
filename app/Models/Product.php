<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    protected $fillable = [
        "quantity", "caliber_id"
    ];


    public function caliber(){
        return $this->belongTo(Caliber::class, 'caliber_id');
    }
}
