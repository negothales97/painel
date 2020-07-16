<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $table = 'accesses';

    protected $fillable = [
        'name',
        'host',
        'door',
        'user',
        'password',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project', 'project_id');
    }
}
