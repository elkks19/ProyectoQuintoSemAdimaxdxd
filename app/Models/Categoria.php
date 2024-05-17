<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id
 * @property $nombreCAT
 * @property $created_at
 * @property $updated_at
 *
 * @property CategoriasPorDocumento[] $categoriasPorDocumentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{
    
    static $rules = [
		'nombreCAT' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreCAT'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categoriasPorDocumentos()
    {
        return $this->hasMany('App\Models\CategoriasPorDocumento', 'categoria_id', 'id');
    }
    

}
