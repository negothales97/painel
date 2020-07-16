@extends('admin.templates.default')
@section('title', 'Adicionar Empresa')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adicionar Empresa</h1>
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
                    <form action="{{route('admin.company.store')}}" method="POST">
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
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="segment_id">Segmento</label>
                                        <select name="segment_id" id="segment_id"
                                            class="form-control {{$errors->has('segment_id') ? 'is-invalid' : ''}}">
                                            <option disabled selected>Selecione..</option>
                                            @foreach($segments as $segment)
                                            <option value="{{$segment->id}}">{{$segment->name}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('segment_id'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('segment_id') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="phone">Telefone</label>
                                        <input type="text"
                                            class="form-control input-phone {{$errors->has('phone') ? 'is-invalid' : ''}}"
                                            id="phone" name="phone" value="{{old('phone')}}">
                                        @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('phone') }}</strong>
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