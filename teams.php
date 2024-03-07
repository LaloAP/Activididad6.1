<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clase que representa un equipo.
 */
class Team extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = ['name', 'city'];

    /**
     * Obtener los jugadores asociados con este equipo.
     */
    public function players()
    {
        return $this->hasMany(Player::class);
    }
}