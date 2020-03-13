@extends('layouts.layout')

@section('content')
<div class="container">

    <div class="uper">
        <div class="card">
            <h3 class="card-text text-center">Patrimonios relacionados</h3>
        </div>

        <table class="table-responsive-md table table-bordered">
            <thead>
                <tr>
                    <th> Usuario </th>
                    <th> Inventários</th>
                    <th> Categoria</th>
                    <th colspan="2"> Ações </th>
                </tr>

            </thead>
            <tbody>
                @foreach($patrimonios as $patrimonio)
                <tr>
                    <td> Usuario </td>
                    <td> Patimonio</td>
                    <td>{{$patrimonio->categoria}} </td>
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