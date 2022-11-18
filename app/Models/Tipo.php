<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipo
 *
 * @property $id
 * @property $nombre
 * @property $duracion
 * @property $num_usos
 * @property $cupo
 * @property $created_at
 * @property $updated_at
 *
 * @property Pase[] $pases
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'duracion' => 'required',
		'num_usos' => 'required',
		
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','duracion','num_usos','cupo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pases()
    {
        return $this->hasMany('App\Models\Pase', 'tipo_id', 'id');
    }
    

}
