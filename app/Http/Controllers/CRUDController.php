<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CRUDController extends Controller
{
    protected $model;
    protected $element;

    public function index()
    {
        $resource = $this->model::all();
        return view("admin.pages.{$this->element}.index")
            ->with("{$this->element}s", $resource);
    }

    public function create()
    {
        return view("admin.pages.{$this->element}.create");
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|max:200|string',
        //     'status' => 'required',
        // ]);

        $resource = $this->model::create($request->except('_token'));
        return redirect()->route("admin.{$this->element}.index")
            ->with('success', 'Adicionado com sucesso');
    }
    public function edit($resource)
    {
        $resource = $this->model::find($resource);
        return view("admin.pages.{$this->element}.edit")
            ->with($this->element, $resource);
    }

    public function update($resource, Request $request)
    {
        // $request->validate([
        //     'name' => 'required|max:200|string',
        //     'status' => 'required',
        // ]);
        $resource = $this->model::find($resource);

        $resource =  $resource->update($request->except('_token'));
        return redirect()->back()
            ->with('success', 'Atualizado com sucesso');
    }

    public function delete($resource)
    {
        $resource = $this->model::find($resource);
        $resource->delete();
        return redirect()->back()
            ->with('success', 'Removido com sucesso');
    }
}
