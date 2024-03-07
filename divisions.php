<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clase que representa una división.
 */
class Division extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Obtener los equipos asociados con esta división.
     */
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}