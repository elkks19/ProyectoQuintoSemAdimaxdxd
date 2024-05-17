<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposDeCopium
 *
 * @property $id
 * @property $nombreTIC
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiposDeCopium extends Model
{
    
    static $rules = [
		'nombreTIC' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreTIC'];



}
