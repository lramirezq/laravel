<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $tipo
 * @property string $valor
 * @property string $misc
 * @property string $created_at
 * @property string $updated_at
 */
class Mantenedor extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mantenedor';

    /**
     * @var array
     */
    protected $fillable = ['tipo', 'valor', 'misc', 'created_at', 'updated_at'];

    protected $casts = [
    
    ];


}
