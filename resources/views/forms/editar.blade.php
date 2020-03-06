@extends('layouts.layout')
@section('content')

<div class="card uper">
    <div class="text-center">
        <h3>Editar patrimonio</h3>
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

        <form action="{{route('patrimonio.update', $patrimonios->id)}}" method="post">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">Usuario:</label>
                <input class="form-control input-group-sm mb-2" type="text" name="User" id="" autofocus>
            </div>
            <div class="form-group">
                <label for="description">Categoria:</label>
                <input type="radio" value="{{ strpos($patrimonios->categoria, "Informatica") === false ? "" : "checked='Informatica'" }}" onclick="document.getElementById('Info').style.display = 'initial', 
                document.getElementById('Moveis').style.display = 'none'" name="categoria">Informatica</input>
                <input type="radio" value="{{ strpos($patrimonios->categoria, "Móveis") === false ? "" : "checked='Móveis'" }}" onclick="document.getElementById('Info').style.display = 'none',
                 document.getElementById('Moveis').style.display = 'initial'" name="categoria">Móveis</input>
            </div>

            <div class="form-group" id="Info">
                <label for="name">N° do Computador:</label>
                <input class="form-control input-group-sm mb-3" value="{{$patrimonios->computador}}" type="text" name="computador" id="" autofocus>

                <label for="description">Monitor:</label>
                <select name="Qtd_Monitor" id="">
                    <option value="" disabled>Quantidade</option>
                    <option value="{{$patrimonios->Qtd_Monitor == 1 }}">1</option>
                    <!--Erros do option value-->
                    <option value="{{$patrimonios->Qtd_Monitor == 2 }}">2</option>
                </select>
                <input class="form-control input-group-sm mb-2" type="text" value="{{$patrimonios->monitor}}" name="monitor" id="" autofocus>
                <input class="form-control input-group-sm mb-2" type="text" name="monitor" autofocus>
            </div>
            <!-- <div class="form-group">
                <label for="quantity">Plenus:</label>
                <a class="btn btn-secondary" type="number" name="plenus" id="" autofocus>Adicionar</a>
            </div> -->

            <div class="form-group" id="Moveis">
                @csrf
                <label for="name">N° da mesa:</label>
                <input class="form-control input-group-sm mb-2" value="{{$patrimonios->mesa}}" type="text" name="mesa" id="" autofocus>

                <label for="name">N° da cadeira:</label>
                <input class="form-control input-group-sm mb-2" value="{{$patrimonios->gaveteiro}}" type="text" name="gaveteiro" id="" autofocus>

                <label for="description">N° do gavateiro:</label>
                <input class="form-control" type="text" value="{{$patrimonios->cadeira}}" name="cadeira" id="" autofocus>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{route('patrimonio.index')}}" type="submit" class="btn btn-secondary ml-2">
                <i class="fas fa-chevron-left"></i>Voltar
            </a>
        </form>
    </div>
</div>
</div>
@endsection