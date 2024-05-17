<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Documento
 *
 * @property $id
 * @property $nombreDOC
 * @property $fechaSubidaDOC
 * @property $tipo_de_documento_id
 * @property $autor_id
 * @property $encargado_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Autore $autore
 * @property CategoriasPorDocumento[] $categoriasPorDocumentos
 * @property Copia[] $copias
 * @property Encargado $encargado
 * @property TiposDeDocumento $tiposDeDocumento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Documento extends Model
{
    
    static $rules = [
		'nombreDOC' => 'required',
		'fechaSubidaDOC' => 'required',
		'tipo_de_documento_id' => 'required',
		'autor_id' => 'required',
		'encargado_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreDOC','fechaSubidaDOC','tipo_de_documento_id','autor_id','encargado_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function autore()
    {
        return $this->hasOne('App\Models\Autore', 'id', 'autor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categoriasPorDocumentos()
    {
        return $this->hasMany('App\Models\CategoriasPorDocumento', 'documento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function copias()
    {
        return $this->hasMany('App\Models\Copia', 'documento_id', 'id');
    }
    
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
    public function tiposDeDocumento()
    {
        return $this->hasOne('App\Models\TiposDeDocumento', 'id', 'tipo_de_documento_id');
    }
    

}
