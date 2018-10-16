<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Militar extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'dataDeNascimento', 'servicoObrigatorio', 'patente', 'identidade'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
    
    /**
     * Set the user's name.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        return $this->attributes['nome'] = ucfirst($value);
    }
}
