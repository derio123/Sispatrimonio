@extends('layouts.layout')

@section('content')
    <div class="container">

        <div class="uper">
            <div class="card">
                <h3 class="card-text text-center">{{ $title }}</h3>
            </div>
            @if(@isset($patrimonios))
            <div class="container-fluid uper">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control col-8 mr-sm-2" id="search_patrimonio" name="search" type="search"
                        placeholder="pesquise aqui" aria-label="Search">
                    <a title="Pesquise aqui" class="btn btn-md btn-success ml-3">
                        <i class="fas fa-search fa-1x"></i>
                    </a>
                </form>
            </div>

            <table class="table-responsive-md table table-bordered">
                <thead>
                    <tr>
                        <th> Categoria</th>
                        <th> Sala </th>
                        <th> Usuario </th>
                        <th colspan="1"> Ações </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($patrimonios as $patrimonio)
                        <tr>
                            <td>{{ $patrimonio->categoria }} </td>
                            <td>{{ $patrimonio->sala }}</td>
                            <td> Jonh boo santos </td>
                            <td>
                                <a href="{{ route('patrimonio.show', $patrimonio->id) }}" data-toggle="modal"
                                    data-target="#modalShow{{ $patrimonio->id }}" title="Detalhes"
                                    class="btn btn-secondary">
                                    <i class="fas fa-eye fa-1x"></i>
                                </a>

                                <a href="{{ route('patrimonio.edit', $patrimonio->id) }}" title="Editar"
                                    class="btn btn-warning ml-2">
                                    <i class="fas fa-edit fa-1x"></i>
                                </a>

                                <a href="{{ route('patrimonio.destroy', $patrimonio->id) }}" title="Excluir"
                                    data-toggle="modal" data-target="#modalDelete{{ $patrimonio->id }}"
                                    class="btn btn-danger ml-2">
                                    <i class="fas fa-trash fa-1x"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $patrimonios->links() }}
            @endif
        </div>
    </div>

    @foreach ($patrimonios as $patrimonio)
        <div class="modal fade" id="modalShow{{ $patrimonio->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            @include('forms.show')
        </div>
    @endforeach

    @foreach ($patrimonios as $patrimonio)
        <div class="modal fade" id="modalDelete{{ $patrimonio->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-danger">
                    @include('forms.delete')
                </div>
            </div>
        </div>
    @endforeach
@endsection
