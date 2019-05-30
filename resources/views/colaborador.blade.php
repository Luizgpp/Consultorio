@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Crosp</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Ativo</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($colaboradores as $colaborador)                            
                            <tr>
                                <th scope="row"> {{$colaborador->user->id}} </th>
                                <td>{{ $colaborador->user->name }}</td>
                                <td>{{ $colaborador->user->email }}</td>
                                <td>{{ $colaborador->crosp }}</td>
                                <td>
                                    @foreach ($colaborador->telefones as $telefone)
                                        {{ $telefone->ddd . '-' . $telefone->numero }} <br>                                    
                                    @endforeach
                                </td>
                                <td>{{$colaborador->cargo->nome}}</td>
                                <td>
                                    @if($colaborador->user->isAllowedToLogin())
                                        <i class="fa fa-check"></i>
                                    @else
                                        <i class="fa fa-ban"></i>
                                    @endif                                
                                </td>
                            </tr>                    
                        @endforeach
                    </tbody>
                  </table>
        </div>
    </div>
</div>
@endsection
