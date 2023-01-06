<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caliber extends Model
{
    use HasFactory;
    protected $table = "calibers";

    protected $fillable = [
        "name"
    ];
}
