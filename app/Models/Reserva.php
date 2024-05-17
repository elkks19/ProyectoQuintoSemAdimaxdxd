<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $estudiante_id
 * @property $copia_id
 * @property $fechaRES
 * @property $canceladaRES
 * @property $created_at
 * @property $updated_at
 *
 * @property Copia $copia
 * @property Estudiante $estudiante
 * @property Prestamo[] $prestamos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    static $rules = [
		'estudiante_id' => 'required',
		'copia_id' => 'required',
		'fechaRES' => 'required',
		'canceladaRES' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estudiante_id','copia_id','fechaRES','canceladaRES'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function copia()
    {
        return $this->hasOne('App\Models\Copia', 'id', 'copia_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id', 'estudiante_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prestamos()
    {
        return $this->hasMany('App\Models\Prestamo', 'reserva_id', 'id');
    }
    

}
