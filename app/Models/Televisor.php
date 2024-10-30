<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Televisor extends Model
{
    use HasFactory;

    protected $fillable = ['marca', 'modelo', 'pulgadas', 'precio'];
}

