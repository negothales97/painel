@extends('admin.templates.default')
@section('title', 'Adicionar Segmento')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adicionar Segmento</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- ./row -->
        <div class="row">
            <div class="col-md-6">

                <form action="{{route('admin.config.segment.store')}}" method="POST">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">Dados</h3>
                        </div>
                        {{csrf_field()}}
                        <div class="card-body pad">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text"
                                            class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name"
                                            name="name" value="{{old('name')}}">
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="show_menu">Menu principal</label>
                                        <select name="show_menu" id="show_menu"  class="form-control {{$errors->has('show_menu') ? 'is-invalid' : ''}}" required>
                                            <option disabled selected>Selecione..</option>
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                        @if ($errors->has('show_menu'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('show_menu') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="status">Formulário de cadastro</label>
                                        <select name="status" id="status" class="form-control {{$errors->has('status') ? 'is-invalid' : ''}}" required>
                                            <option disabled selected>Selecione..</option>
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
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
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description">Descrição</label>
                                        <textarea name="description" class="form-control simple-text-editor {{$errors->has('description') ? 'is-invalid' : ''}}"
                                            id="description" required>{{old('description')}}</textarea>
                                            @if ($errors->has('description'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control input-slug {{$errors->has('slug') ? 'is-invalid' : ''}}" id="slug"
                                            value="{{old('slug')}}" required>
                                            @if ($errors->has('slug'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('slug') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta_title">Meta Title <span
                                                class="meta-title-count"></span></label>
                                        <input type="text" name="meta_title" class="form-control meta-title-w-count {{$errors->has('meta_title') ? 'is-invalid' : ''}}"
                                            id="meta_title" value="{{old('meta_title')}}" required>
                                            @if ($errors->has('meta_title'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('meta_title') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="meta_description">Meta description</label>
                                        <textarea name="meta_description" class="form-control simple-text-editor {{$errors->has('meta_description') ? 'is-invalid' : ''}}"
                                            id="meta_description" required>{{old('meta_description')}}</textarea>
                                            @if ($errors->has('meta_description'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('meta_description') }}</strong>
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
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
@stop