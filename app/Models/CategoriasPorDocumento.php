<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriasPorDocumento
 *
 * @property $categoria_id
 * @property $documento_id
 *
 * @property Categoria $categoria
 * @property Documento $documento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CategoriasPorDocumento extends Model
{
    
    static $rules = [
		'categoria_id' => 'required',
		'documento_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_id','documento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function documento()
    {
        return $this->hasOne('App\Models\Documento', 'id', 'documento_id');
    }
    

}
