@extends('admin.templates.default')

@section('title', 'Lista de Onde nos conheceu')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Onde nos conheceu</h1>
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
                            <h3 class="card-title">Lista de Onde nos conheceu</h3>
                            <div class="card-tools" class="" id="addBanner">
                                <button type="button" class="btn btn-block btn-success" id="btnWhereFindUs">
                                    <i class="fas fa-plus"></i></button>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($wherefindus as $where)
                                    <tr>
                                        <td>{{$where->id}}</td>
                                        <td>{{$where->name}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button title="Editar"
                                                    class="btn btn-outline-primary btnEditWhereFindUs"
                                                    data-id="{{$where->id}}" data-name="{{$where->name}}">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </button>
                                                <button title="Deletar" class="btn btn-outline-primary act-delete"
                                                    href="{{route('admin.config.wherefindus.delete', ['where' => $where])}}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">Nenhum dado cadastrado</td>
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
@section('scripts')

<script type="text/javascript">
$('#btnWhereFindUs').on('click', function() {
    $('#addWhereFindUs').modal('show');
});
$('.btnEditWhereFindUs').on('click', function() {
    let id = $(this).data('id');
    let name = $(this).data('name');
    $('#editWhereFindUs input[name="wherefindus_id"]').val(id);
    $('#editWhereFindUs input[name="name"]').val(name);
    $('#editWhereFindUs').modal('show');
});
</script>
@endsection
@section('modal')

<div class="modal fade" id="addWhereFindUs">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Adicionar Onde nos conheceu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.config.wherefindus.store')}}" method="POST">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                    id="name" name="name" value="{{old('name')}}">
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
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="editWhereFindUs">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Onde nos conheceu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.config.wherefindus.update')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="wherefindus_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                    id="name" name="name" value="{{old('name')}}">
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
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection