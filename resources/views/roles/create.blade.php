@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Criar novo cargo
                    <a class="float-right btn btn-secondary btn-sm" href="#">voltar</a>
                </div>
                
                <div class="card-body">
                    <form method="POST" action="{{route('add.role')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cargo" name="role">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
