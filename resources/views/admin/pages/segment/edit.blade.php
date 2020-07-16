@extends('admin.templates.default')
@section('title', 'Editar Categoria')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Categoria</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- ./row -->

        <div class="row">
            <div class="col-md-6">
                <form action="{{route('admin.config.segment.update', ['segment' => $segment])}}" method="POST">
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
                                            name="name" value="{{$segment->name}}">
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
                                        <select name="show_menu" id="show_menu"
                                            class="form-control {{$errors->has('show_menu') ? 'is-invalid' : ''}}"
                                            required>
                                            <option disabled selected>Selecione..</option>
                                            <option value="1" {{$segment->show_menu == 1 ? "selected" : ""}}>Sim</option>
                                            <option value="0" {{$segment->show_menu == 0 ? "selected" : ""}}>Não</option>
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
                                        <select name="status" id="status"
                                            class="form-control {{$errors->has('status') ? 'is-invalid' : ''}}"
                                            required>
                                            <option disabled selected>Selecione..</option>
                                            <option value="1" {{$segment->status == 1 ? "selected" : ""}}>Sim</option>
                                            <option value="0" {{$segment->status == 0 ? "selected" : ""}}>Não</option>
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
                                        <textarea name="description"
                                            class="form-control simple-text-editor {{$errors->has('description') ? 'is-invalid' : ''}}"
                                            id="description" required>{{$segment->description}}</textarea>
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
                                        <input type="text" name="slug"
                                            class="form-control input-slug {{$errors->has('slug') ? 'is-invalid' : ''}}"
                                            id="slug" value="{{$segment->slug}}" required>
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
                                        <input type="text" name="meta_title"
                                            class="form-control meta-title-w-count {{$errors->has('meta_title') ? 'is-invalid' : ''}}"
                                            id="meta_title" value="{{$segment->meta_title}}" required>
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
                                        <textarea name="meta_description"
                                            class="form-control simple-text-editor {{$errors->has('meta_description') ? 'is-invalid' : ''}}"
                                            id="meta_description" required>{{$segment->meta_description}}</textarea>
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
                            <button type="submit" class="btn btn-primary">Atualizar</button>
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