@extends('admin.templates.default')
@section('title', 'Adicionar Cor')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adicionar Cor</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @if ($errors->any())
    <div class="content-header">
        @foreach ($errors->all() as $error)
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $error }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
    <!-- Main content -->
    <section class="content">
        <!-- ./row -->

        <div class="row">
            <div class="col-md-6">

                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Dados</h3>
                    </div>
                    <form action="{{route('admin.color.store')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
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
                                        <label for="reference">Referência</label>
                                        <input type="text"
                                            class="form-control {{$errors->has('reference') ? 'is-invalid' : ''}}"
                                            id="reference" name="reference" value="{{old('reference')}}" required>
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
                                        <label for="image">Imagem</label>
                                        <small>
                                            <p>São aceitos os formatos JPEG, JPG, PNG e GIF</p>
                                            <p>O tamanho ideal é de 50px por 50px</p>
                                        </small>
                                        <div class="custom-file">
                                            <input type="file" name="image"
                                                class="custom-file-input {{$errors->has('image') ? 'is-invalid' : ''}}"
                                                id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Selecionar</label>
                                        </div>
                                        @if ($errors->has('image'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('image') }}</strong>
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
@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>
@endsection