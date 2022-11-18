<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pase
 *
 * @property $id
 * @property $tipo_id
 * @property $persona_id
 * @property $creado
 * @property $created_at
 * @property $updated_at
 *
 * @property Persona $persona
 * @property Tipo $tipo
 * @property Uso[] $usos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pase extends Model
{
    
    static $rules = [
		
		
		'creado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['creado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'persona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo', 'id', 'tipo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usos()
    {
        return $this->hasMany('App\Models\Uso', 'pase_id', 'id');
    }
    
    public function getValidoHastaAttribute()
    {
        
        return \DateTime::createFromFormat('Y-m-d H:i:s',$this->creado)->add(new \DateInterval('P'.$this->tipo->duracion.'D'))->format('Y-m-d H:i:s');
    }

    public function getPasadasRestantesAttribute()
    {
        $start=date_create($this->creado);
        $end = new \DateTime('NOW');
        $days=date_diff($start,$end)->format('%a');
        if (($this->tipo->num_usos-($this->usos->count()+$days))>0)
        {
            return ($this->tipo->num_usos-($this->usos->count()+$days));
        }
        else
        {
            return 0;
        }
    }

    public function getFechaTentativaAttribute()
    {

    }

    public function getValidoAttribute()
    {
        if (\DateTime::createFromFormat('Y-m-d H:i:s',$this->valido_hasta)>new \DateTime('NOW'))
        {
            return $this->pasadas_restantes>0;
        }
        else
        {
            return false;
        }
        
    }

}
