<?php

namespace App\Models;

// Si deseas verificar correos electrónicos, puedes descomentar esta línea
// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Atributos que se pueden asignar masivamente.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Atributos que deben ser ocultados para la serialización.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Atributos que deben ser transformados a tipos específicos.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the name of the route user should be redirected to after login.
     *
     * @return string
     */
    public function redirectTo()
    {
        // You can customize this method to define where users should be redirected after login
        return '/dashboard';
    }

    /**
     * Indicates if the user is an administrator.
     *
     * @return bool
     */
    public function isAdmin()
    {
        // You can customize this method based on your application's logic for determining admin users
        return $this->role === 'admin';
    }
}