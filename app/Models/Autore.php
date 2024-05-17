<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autore
 *
 * @property $id
 * @property $nombreAUT
 * @property $created_at
 * @property $updated_at
 *
 * @property Documento[] $documentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autore extends Model
{
    
    static $rules = [
		'nombreAUT' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreAUT'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentos()
    {
        return $this->hasMany('App\Models\Documento', 'autor_id', 'id');
    }
    

}
