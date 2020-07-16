@extends('admin.templates.default')
@section('title', 'Editar Cliente')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Cliente</h1>
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
                    <form action="{{route('admin.customer.update', ['customer' => $customer])}}" method="POST">
                        {{csrf_field()}}
                        <div class="card-body pad">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text"
                                            class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name"
                                            name="name" value="{{$customer->name}}">
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
                                        <label for="email">E-mail</label>
                                        <input type="email"
                                            class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
                                            id="email" name="email" value="{{$customer->email}}">
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <small>
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </small>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p><small>Preencha a senha, somente se deseja atualizá-la.</small></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="password">Senha</label>
                                        <input type="password"
                                            class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"
                                            id="password" name="password">
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
                                        <label for="password_confirmation">Confirmação de Senha</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation">
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