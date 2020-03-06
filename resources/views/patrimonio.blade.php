@extends('layouts.layout')

@section('content')
<div class="container uper">
    @if(session()->get('sucess'))
    <div class="alert alert-sucess">
        {{ session()->get('sucess')}}
    </div><br>
    @endif
    <div class="card">
        <h3 class="card-text text-center">Patrimonios relacionados</h3>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th> Categoria</th>
                <th> Patrimonio</th>
                <th> Usuario </th>
                <th> Ações </th>
            </tr>
            <a href="{{ route('patrimonio.create')}}" class="btn btn-primary mb-1 mt-1">
                Adicionar
                <i class="fas fa-plus"></i>
            </a>
        </thead>
        <tbody>
            @foreach($patrimonios as $patrimonio)
            <tr>
                <td>{{$patrimonio->categoria}} </td>
                <td> Patimonio</td>
                <td> Usuario </td>
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
    {{ $patrimonios->links() }}

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