<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CRUDController;

class ProjectController extends CRUDController
{
    public function __construct()
    {
        $this->model = Project::class;
        $this->element = 'project';
    }
}
