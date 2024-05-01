<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $fillable = [
        'componente', 'estado', 'observacion', 'last_check',
    ];
    use HasFactory;
}
