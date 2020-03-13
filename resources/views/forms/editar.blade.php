@extends('layouts.layout')
@section('content')

<div class="uper">

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

        <form action="{{route('patrimonio.update', $patrimonios->id)}}" method="PUT">
            <div class="row justify-content-md-center">
                <div class="col-sm-9 col-md-6">
                    <div class="form-group form-check-label">
                        @csrf
                        <label for="name">Usuario:</label>
                        <select class="custom-select custom-select-lg mb-3" size="4" name="user" id="user1">
                            <option selected value=""> </option>
                            <option value="">Jonh Boo Santos</option>
                            <option value="">Jonh Boo Santos</option>
                            <option value="">Jonh Boo Santos</option>
                        </select>
                        <div class="form-group">
                            <label for="description" id="INF">Categoria:</label>
                            <input type="radio" onclick="document.getElementById('Info').style.display = 'initial',
                            document.getElementById('Moveis').style.display = 'none'" name="categoria" value="{{$patrimonios->categoria[0]}}">Informatica</input>
                            <input type="radio" onclick="document.getElementById('Info').style.display = 'none',
                            document.getElementById('Moveis').style.display = 'initial'" name="categoria" value="{{$patrimonios->categoria[1]}}">Móveis</input>
                        </div>
                    </div>

                    <div class="col-sm-9 col-md-12 text-left">
                        <div class="form-check-label col-auto" id="Info">
                            <label for="name">N° do Computador:</label>
                            <input class="form-control" value="{{$patrimonios->computador}}" type="text" name="computador" id="" autofocus>

                            <div class="form-check-label">
                                <label for="">Monitor:</label><!--  -->
                                <input type="radio" name="Qtd_Monitor" value="{{$patrimonios->Qtd_Monitor == 1 }}" onclick="document.getElementById('qtd2').style.display = 'none', 
                             document.getElementById('qtd1').style.display = 'initial'" value="1">1</input>
                                <input type="radio" name="Qtd_Monitor" value="{{$patrimonios->Qtd_Monitor == 2 }}" onclick="document.getElementById('qtd1').style.display = 'initial', document.getElementById('qtd2').style.display = 'initial'" value="2">2</input>
                            </div>

                            <div class="form-check-label mb-2 quant" id="qtd1">
                                <label for="moni1">Cod. Monitor</label>
                                <input class="form-control" type="text" id="moni1" value="{{$patrimonios->monitor}}" name="monitor" autofocus>
                            </div>
                            <div class="form-check-label mb-2 quant" id="qtd2">
                                <label for="moni2">Cod. Monitor 2</label>
                                <input class="form-control" type="text" id="moni2" value="{{$patrimonios->monitor2}}" name="monitor2" autofocus>
                            </div>
                        </div>
                        <div class="form-check-label col-auto" id="Moveis">
                            @csrf
                            <label for="tab" for="name">N° da mesa </label>
                            <input class="form-control mb-2" value="{{$patrimonios->mesa}}" type="text" name="mesa" id="tab" autofocus>

                            <label for="gav" for="name">N° da cadeira:</label>
                            <input class="form-control mb-2" value="{{$patrimonios->gaveteiro}}" type="text" name="gaveteiro" id="gav" autofocus>

                            <label for="cad" for="description">N° do gavateiro:</label>
                            <input class="form-control" value="{{$patrimonios->cadeira}}" type="text" name="cadeira" id="cad" autofocus>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Salvar</button>

                   <!--  <a href="{{route('patrimonio.index')}}" type="submit" class="btn btn-secondary ml-2">
                        <i class="fas fa-chevron-left"></i>Voltar
                    </a> -->
                </div>
                <!-- <div class="form-group">
                <label for="quantity">Plenus:</label>
                <a class="btn btn-secondary" type="number" name="plenus" id="" autofocus>Adicionar</a>
            </div> -->

        </form>
    </div>
</div>
@endsection