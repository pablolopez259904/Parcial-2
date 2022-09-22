<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $carnet
 * @property $nombre
 * @property $apellidos
 * @property $direccion
 * @property $telefono
 * @property $genero
 * @property $email
 * @property $fecha_nacimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'carnet' => 'required',
		'nombre' => 'required',
		'apellidos' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'genero' => 'required',
		'email' => 'required',
		'fecha_nacimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['carnet','nombre','apellidos','direccion','telefono','genero','email','fecha_nacimiento'];



}
