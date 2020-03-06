@extends('layouts.layout')
@section('content')

<div class="card uper">
    <div class="text-center">
        <h3>Adicionar Patrimonio</h3>
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

        <form action="{{route('patrimonio.store')}}" method="post">
            <div class="form-group">
                @csrf
                <label class="form-check-label" for="name">Usuario:</label>
                <input class="form-control input-group-sm mb-3" type="text" name="User" id="" autofocus>
            </div>
            <div class="form-group">
                <label class="form-check-label" for="description">Categoria:</label>
                <input type="radio" onclick="document.getElementById('Info').style.display = 'initial', document.getElementById('Moveis').style.display = 'none'" name="categoria" value="Informatica">Informatica</input>
                <input type="radio" onclick="document.getElementById('Info').style.display = 'none', document.getElementById('Moveis').style.display = 'initial'" name="categoria" value="Móveis">Móveis</input>
            </div>

            <div class="form-group" id="Info">
                <label class="form-check-label" for="name">N° do Computador:</label>
                <input class="form-control input-group-sm mb-3" type="text" name="computador" id="" autofocus>

                <label class="form-check-label" for="description">Monitor:</label>
                <select name="Qtd_Monitor" id="Monitore">
                    <option value="" selected>Quantidade </option>
                    <option value="1"  id="1">1</option>
                    <option value="2"  id="2">2</option>
                </select>

                <div class="form-group" id="qtd1"><input type="text" name="monitor" autofocus></div>
                <div class="form-group" id="qtd2"><input type="text" name="monitor" autofocus></div>
            </div>

            <!-- <div class="form-group">
                <label for="quantity">Plenus:</label>
                <a class="btn btn-secondary" type="number" name="plenus" id="" autofocus>Adicionar</a>
            </div> -->

            <div class="form-group" id="Moveis">
                @csrf
                <label for="tab" class="form-check-label" for="name">N° da mesa:</label>
                <input class="form-control input-group-sm mb-3" type="text" name="mesa" id="tab" autofocus>

                <label for="gav" class="form-check-label" for="name">N° da cadeira:</label>
                <input class="form-control input-group-sm mb-3" type="text" name="gaveteiro" id="gav" autofocus>

                <label for="cad" class="form-check-label" for="description">N° do gavateiro:</label>
                <input class="form-control" type="text" name="cadeira" id="cad" autofocus>
            </div>

            <button type="submit" class="btn btn-primary mb-2 ml-2">Salvar</button>
            <a href="{{route('patrimonio.index')}}" type="submit" class="btn btn-secondary mb-2 ml-2">
                Voltar
            </a>

        </form>
    </div>
</div>
</div>

<script>

</script>
@endsection