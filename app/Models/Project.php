<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'status'
    ];

    public function accesses()
    {
        return $this->hasMany('App\Models\Access', 'project_id');
    }

    public function getStatusAttribute($value)
    {
        $status = [
            0 => 'Em Desenvolvimento',
            1 => 'Finalizado'
        ];
        return $status[$value];
    }
}
