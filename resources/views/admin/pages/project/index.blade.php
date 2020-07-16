@extends('admin.templates.default')

@section('title', 'Lista de Projetos')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Projetos</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Projetos</h3>
                            <div class="card-tools" class="" id="addBanner">
                                <button type="button" onclick="window.location.href='{{route('admin.project.create')}}'"
                                    class="btn btn-block btn-success">
                                    <i class="fas fa-plus"></i></button>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-3" >
                            <table class="table table-head-fixed table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($projects as $project)
                                    <tr>
                                        <td>{{$project->id}}</td>
                                        <td>{{$project->name}}</td>
                                        <td>{{$project->status}}</td>
                                        <td class="text-center align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <button title="Editar" class="btn btn-outline-info"
                                                    onclick="window.location.href='{{route('admin.project.edit', ['resource' => $project])}}'">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </button>
                                                <button title="Deletar" class="btn btn-outline-danger act-delete"
                                                    href="{{route('admin.project.delete', ['resource' => $project])}}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">Nenhuma projeto cadastrado</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection