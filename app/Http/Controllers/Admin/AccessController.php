<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CRUDController;
use App\Models\Access;
use App\Models\Project;

class AccessController extends CRUDController
{
    public function __construct()
    {
        $this->model = Access::class;
        $this->element = 'access';
    }

    public function create()
    {
        return view("admin.pages.{$this->element}.create")
            ->with('projects', Project::get());
    }
    public function edit($resource)
    {
        $resource = $this->model::find($resource);

        return view("admin.pages.{$this->element}.edit")
            ->with('access', $resource)
            ->with('projects', Project::get());
    }
}
