<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $encargado_id
 * @property $reserva_id
 * @property $fechaPrestamoPRE
 * @property $fechaDevolucionPRE
 * @property $fechaLimitePRE
 * @property $created_at
 * @property $updated_at
 *
 * @property Encargado $encargado
 * @property Reserva $reserva
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
    
    static $rules = [
		'encargado_id' => 'required',
		'reserva_id' => 'required',
		'fechaPrestamoPRE' => 'required',
		'fechaDevolucionPRE' => 'required',
		'fechaLimitePRE' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['encargado_id','reserva_id','fechaPrestamoPRE','fechaDevolucionPRE','fechaLimitePRE'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function encargado()
    {
        return $this->hasOne('App\Models\Encargado', 'id', 'encargado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reserva()
    {
        return $this->hasOne('App\Models\Reserva', 'id', 'reserva_id');
    }
    

}
