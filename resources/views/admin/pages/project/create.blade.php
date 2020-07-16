@extends('admin.templates.default')
@section('title', 'Adicionar Projeto')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adicionar Projeto</h1>
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
                    <form action="{{route('admin.project.store')}}" method="POST">
                        @csrf
                        <div class="card-body pad">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text"
                                            class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name"
                                            name="name" value="{{old('name')}}" required>
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
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control  {{$errors->has('name') ? 'is-invalid' : ''}}">
                                            <option disabled selected>Selecione..</option>
                                            <option value="0">Em desenvolvimento</option>
                                            <option value="1">Pronto</option>
                                        </select>
                                        @if ($errors->has('status'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('status') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
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