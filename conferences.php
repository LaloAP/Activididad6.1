<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clase que representa una conferencia.
 */
class Conference extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date', 'location'];

    /**
     * Validar los datos de la conferencia antes de guardar.
     *
     * @param array $data
     * @return bool
     */
    public function validateConference(array $data)
    {
        // Validar que se proporcionen el nombre, la fecha y la ubicación.
        if (!isset($data['name']) || !isset($data['date']) || !isset($data['location'])) {
            return false;
        }

        // Otra lógica de validación puede ir aquí.

        return true;
    }
}