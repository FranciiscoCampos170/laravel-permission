@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cargos
                    <a class="float-right btn btn-success btn-sm" href="{{ route('create.role') }}">Criar novo cargo</a>
                </div>
                @php $i = 1; @endphp
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Nome</th>
                            <th colspan="2" class="text-center">Ação</th>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                <td>{{$i++}}</td>
                                <td>{{$role->name}}</td>
                                <td class="text-center"><a href="#" class="btn btn-warning btn-sm">Editar</a></td>
                                <td class="text-center"><a href="#" class="btn btn-danger btn-sm">Apagar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                            
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
