@extends('layouts.layout')

@section('content')
<div class="container uper">

    <div class="card">
        <h3 class="card-text text-center">Patrimonios relacionados</h3>
    </div>
    <div class="card">

    </div>
    <table class="table-responsive-md table table-bordered">
        <thead>
            <tr>
                <th> Usuario </th>
                <th> Patrimonio</th>
                <th> Categoria</th>
                <th colspan="3"> Ações </th>
                <th><a href="{{ route('patrimonio.create')}}" class="btn btn-primary mb-1 mt-1">
                        Adicionar
                        <i class="fas fa-plus"></i>
                    </a>
                </th>
            </tr>

        </thead>
        <tbody>
            @foreach($patrimonios as $patrimonio)
            <tr>
                <td> Usuario </td>
                <td> Patimonio</td>
                <td>{{$patrimonio->categoria}} </td>
                @php
                var_dump($patrimonio->categoria)
                @endphp
                <td>
                    <a href="{{ route('patrimonio.show', $patrimonio->id)}}" data-toggle="modal" data-target="#modalShow{{$patrimonio->id}}" class="btn btn-secondary">
                        Detalhes
                        <i class="fas fa-plus"></i>
                    </a>

                    <a href="{{ route('patrimonio.edit', $patrimonio->id)}}" class="btn btn-warning ml-2">
                        Editar
                        <i class="fas fa-plus"></i>
                    </a>

                    <a href="{{ route('patrimonio.destroy', $patrimonio->id)}}" data-toggle="modal" data-target="#modalDelete{{$patrimonio->id}}" class="btn btn-danger ml-2">
                        Excluir
                        <i class="fas fa-plus"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>

@foreach($patrimonios as $patrimonio)
<div class="modal fade" id="modalShow{{$patrimonio->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('forms.show')
</div>
@endforeach

@foreach($patrimonios as $patrimonio)
<div class="modal fade" id="modalDelete{{$patrimonio->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-danger">
            @include('forms.delete')
        </div>
    </div>
</div>
@endforeach
@endsection