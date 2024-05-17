<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Descarga
 *
 * @property $id
 * @property $estudiante_id
 * @property $copia_id
 * @property $fechaDES
 * @property $created_at
 * @property $updated_at
 *
 * @property Copia $copia
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Descarga extends Model
{
    
    static $rules = [
		'estudiante_id' => 'required',
		'copia_id' => 'required',
		'fechaDES' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estudiante_id','copia_id','fechaDES'];


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
    

}
