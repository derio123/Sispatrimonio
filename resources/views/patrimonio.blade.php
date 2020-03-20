@extends('layouts.layout')

@section('content')
<div class="container">

    <div class="uper">
        <div class="card">
            <h3 class="card-text text-center">Patrimonios relacionados</h3>
        </div>

        <div class="container-fluid uper">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control col-8 mr-sm-2" id="search_patrimonio" name="pesquisar" type="search" placeholder="pesquise aqui" aria-label="Search">
                <a class="btn btn-md btn-success ml-3 col-2">
                    <i class="fas fa-search fa-2x"></i>
                </a>
            </form>
        </div>

        <table class="table-responsive-md table table-bordered">
            <thead>
                <tr>
                    <th> Usuario </th>
                    <th> Sala </th>
                    <th> Categoria</th>
                    <th colspan="2"> Ações </th>
                </tr>

            </thead>
            <tbody>
                @foreach($patrimonios as $patrimonio)
                <tr>
                    <td> Usuario </td>
                    <td> TA13 </td>
                    <td>{{$patrimonio->categoria}} </td>
                    <td>
                        <a href="{{ route('patrimonio.show', $patrimonio->id)}}" data-toggle="modal" data-target="#modalShow{{$patrimonio->id}}" title="Detalhes" class="btn btn-secondary">
                            <i class="fas fa-eye fa-2x"></i>
                        </a>

                        <a href="{{ route('patrimonio.edit', $patrimonio->id)}}" title="Editar" class="btn btn-warning ml-2">
                            <i class="fas fa-edit fa-2x"></i>
                        </a>

                        <a href="{{ route('patrimonio.destroy', $patrimonio->id)}}" title="Excluir" data-toggle="modal" data-target="#modalDelete{{$patrimonio->id}}" class="btn btn-danger ml-2">
                            <i class="fas fa-times fa-2x"></i>
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
