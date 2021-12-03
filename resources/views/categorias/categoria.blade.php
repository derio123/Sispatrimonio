@extends('layouts.layout')

@section('content')

<div class="container uper">
    <div class="card-text text-center">
        <h3>Categorias</h3>
    </div>

    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div><br>
        @endif
        <div class="row">
            <div class="col-md-6">
                <h3>Adicionar Categoria</h3>
                <form action="{{route('categorias.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select class="form-control" name="categoria" id="" required>
                            <option value=" "> </option>
                            <option value="Informatica">Informatica</option>
                            <option value="Moveis">Moveis</option>
                            <option value="Eletrodomesticos">Eletrodomesticos</option>
                            <option value="Treinamento">Treinamento</option>
                        </select>
                        <!-- <input type="text" name="" id="" class="form-group" placeholder="crie uma categoria" required maxlength="20"> -->
                    </div>

                    <button type="submit" class="btn btn-primary text-white lead">
                        <i class="fas fa-save"></i> Salvar</button>
                    <a class="btn btn-warning ml-2 text-white lead" href="{{route('patrimonio.create')}}">
                        <i class="fas fa-plus"></i> Cadastrar Inventários</a>
                    <a class="btn btn-secondary ml-3 text-white lead" href="{{route('patrimonio.index')}}">
                        <i class="fas fa-chevron-left"></i> Voltar
                    </a>
                </form>
            </div>
            <div class="mt-3 col-sm-3 col-md-6">
                <ul class="list-group">
                    <li class="list-group-item active">
                        <h3>Categorias</h3>
                    </li>
                    @foreach($categorias as $cat)
                    <li class="list-group-item">{{$cat->categoria}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    @endsection