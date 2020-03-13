@extends('layouts.layout')
@section('content')

<div class="container">

    <div class="uper">
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

            <form action="{{route('patrimonio.store')}}" method="post" enctype="multipart/form-data">
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

                            <div class="form-group form-check-label">
                                <label for="description">Categoria:</label>
                                <input type="radio" onclick="document.getElementById('Info').style.display = 'initial', 
                        document.getElementById('Moveis').style.display = 'none'" name="categoria" value="Informatica">Informatica</input>
                                <input type="radio" onclick="document.getElementById('Info').style.display = 'none', 
                        document.getElementById('Moveis').style.display = 'initial'" name="categoria" value="Móveis">Móveis</input>
                            </div>
                        </div>


                        <div class="col-sm-9 col-md-12 text-left">
                            <div class="form-check-label col-auto" id="Info">
                                <label for="name">N° do Computador:</label>
                                <input class="form-control" type="text" name="computador" id="" autofocus>

                                <div class="form-check-label">
                                    <label for="">Monitor:</label><!--  -->
                                    <input type="radio" name="Qtd_Monitor" onclick="document.getElementById('qtd2').style.display = 'none', document.getElementById('qtd1').style.display = 'initial'" value="1">1</input>
                                    <input type="radio" name="Qtd_Monitor" onclick="document.getElementById('qtd1').style.display = 'initial', document.getElementById('qtd2').style.display = 'initial'" value="2">2</input>
                                </div>

                                <div class="form-check-label mb-2 quant" id="qtd1">
                                    <label for="moni1">Cod. Monitor</label>
                                    <input class="form-control" type="text" id="moni1" name="monitor" autofocus>
                                </div>
                                <div class="form-check-label mb-2 quant" id="qtd2">
                                    <label for="moni2">Cod. Monitor 2</label>
                                    <input class="form-control" type="text" id="moni2" name="monitor2" autofocus>
                                </div>
                            </div>
                            <div class="form-check-label col-auto" id="Moveis">
                                @csrf
                                <label for="tab" for="name">N° da mesa </label>
                                <input class="form-control mb-2" type="text" name="mesa" id="tab" autofocus>

                                <label for="gav" for="name">N° da cadeira:</label>
                                <input class="form-control mb-2" type="text" name="gaveteiro" id="gav" autofocus>

                                <label for="cad" for="description">N° do gavateiro:</label>
                                <input class="form-control" type="text" name="cadeira" id="cad" autofocus>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 ml-2">Salvar</button>

                       <!--  <a href="{{route('patrimonio.index')}}" type="submit" class="btn btn-secondary mb-2 ml-5">
                            Voltar
                        </a> -->
                    </div>
                    <!-- <div class="form-control">
                <label for="quantity">Plenus:</label>
                <a class="btn btn-secondary" type="number" name="plenus" id="" autofocus>Adicionar</a>
            </div> -->

            </form>
        </div>
    </div>
</div>

@endsection