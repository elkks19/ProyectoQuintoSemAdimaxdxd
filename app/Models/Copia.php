<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Copia
 *
 * @property $id
 * @property $tipo_de_documento_id
 * @property $documento_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Descarga[] $descargas
 * @property Documento $documento
 * @property Reserva[] $reservas
 * @property TiposDeDocumento $tiposDeDocumento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Copia extends Model
{
    
    static $rules = [
		'tipo_de_documento_id' => 'required',
		'documento_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_de_documento_id','documento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function descargas()
    {
        return $this->hasMany('App\Models\Descarga', 'copia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function documento()
    {
        return $this->hasOne('App\Models\Documento', 'id', 'documento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva', 'copia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tiposDeDocumento()
    {
        return $this->hasOne('App\Models\TiposDeDocumento', 'id', 'tipo_de_documento_id');
    }
    

}
