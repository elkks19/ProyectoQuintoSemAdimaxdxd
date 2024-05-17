<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposDeDocumento
 *
 * @property $id
 * @property $nombreTID
 *
 * @property Copia[] $copias
 * @property Documento[] $documentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiposDeDocumento extends Model
{
    
    static $rules = [
		'nombreTID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreTID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function copias()
    {
        return $this->hasMany('App\Models\Copia', 'tipo_de_documento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentos()
    {
        return $this->hasMany('App\Models\Documento', 'tipo_de_documento_id', 'id');
    }
    

}
