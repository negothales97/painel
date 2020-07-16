@extends('admin.templates.default')
@section('title', 'Adicionar Acesso')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adicionar Acesso</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- ./row -->

        <div class="row">
            <div class="col-md-6">

                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Dados</h3>
                    </div>
                    <form action="{{route('admin.access.update', ['resource' => $access])}}" method="POST">
                        @csrf
                        <div class="card-body pad">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text"
                                            class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name"
                                            name="name" value="{{$access->name}}" required>
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="host">Host</label>
                                        <input type="text"
                                            class="form-control {{$errors->has('host') ? 'is-invalid' : ''}}" id="host"
                                            name="host" value="{{$access->host}}" required>
                                        @if ($errors->has('host'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('host') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="door">Porta</label>
                                        <input type="text"
                                            class="form-control {{$errors->has('door') ? 'is-invalid' : ''}}" id="door"
                                            name="door" value="{{$access->door}}" required>
                                        @if ($errors->has('door'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('door') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="user">Login</label>
                                        <input type="text"
                                            class="form-control {{$errors->has('user') ? 'is-invalid' : ''}}" id="user"
                                            name="user" value="{{$access->user}}" required>
                                        @if ($errors->has('user'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('user') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="password">Senha</label>
                                        <input type="text"
                                            class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="password"
                                            name="password" value="{{$access->password}}" required>
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="project">Projeto</label>
                                        <select name="project_id" id="project" class="form-control  {{$errors->has('name') ? 'is-invalid' : ''}}">
                                            <option disabled selected>Selecione..</option>
                                            @foreach($projects as $project)
                                            <option value="{{$project->id}}" {{$project->id == $access->project_id ? 'selected' : ''}}>{{$project->name}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('project_id'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('project_id') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
@stop