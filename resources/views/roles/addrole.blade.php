@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cargo
                    <a class="float-right btn btn-secondary btn-sm" href="#">voltar</a>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr> 
                            <th>Nome</th>
                            <th>Cargo</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            @foreach ($users as $user)
                                <td> 
                                <input value="{{$user->id}}">
                                {{$user->name}}
                                </td>
                                <td>
                                    <select>
                                        @foreach ($roles as $role)
                                    <option value="{{$role->id}}"> {{$role->name}}</option>
                                            
                                        @endforeach
                                    </select>
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                
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
