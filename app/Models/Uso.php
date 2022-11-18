<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Uso
 *
 * @property $id
 * @property $pase_id
 * @property $usado
 * @property $created_at
 * @property $updated_at
 *
 * @property Pase $pase
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Uso extends Model
{
    
    static $rules = [
		'pase_id' => 'required',
		'usado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pase_id','usado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pase()
    {
        return $this->hasOne('App\Models\Pase', 'id', 'pase_id');
    }
    

}
