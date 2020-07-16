@extends('admin.templates.default')
@section('title', 'Editar Cor')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Cor</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- ./row -->

        <div class="row">
            <div class="col-md-6">
                <form action="{{route('admin.color.update', ['color' => $color])}}" method="POST"
                    enctype="multipart/form-data">
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
                                            name="name" value="{{$color->name}}" required>
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
                                        <label for="reference">Referência</label>
                                        <input type="text"
                                            class="form-control {{$errors->has('reference') ? 'is-invalid' : ''}}"
                                            id="reference" name="reference" value="{{$color->reference}}" required>
                                        @if ($errors->has('reference'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('reference') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="file">Imagem</label>
                                        <small>
                                            <p>São aceitos os formatos JPEG, JPG, PNG e GIF</p>
                                            <p>O tamanho ideal é de 50px por 50px</p>
                                        </small>
                                        <div class="custom-file">
                                            <input type="file" name="file"
                                                class="custom-file-input {{$errors->has('file') ? 'is-invalid' : ''}}"
                                                id="customFile">
                                            <label class="custom-file-label" for="customFile">Selecionar</label>
                                        </div>
                                        @if ($errors->has('file'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('file') }}</strong>
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
                    </div>
                </form>
            </div>
            <div class="col-md-6">

                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Imagem Atual</h3>
                    </div>
                    <div class="card-body pad">

                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <figure class="figure">
                                    <img src="{{asset('uploads/colors/original').'/'. $color->image}}" alt="Imagem Cor"
                                        width="150px" height="auto" class="img-thumbnail">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>

        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
@stop