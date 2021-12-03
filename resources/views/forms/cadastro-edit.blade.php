@extends('layouts.layout')
@section('content')

<div class="container">
    <div class="uper">
        <div class="text-center">
            <h3 class="card display-4 p-1 align-center text-center jumbotron">{{$title}}</h3>
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
                {{csrf_field()}}
                <div class="row justify-content-md-center">
                    <div class="col-sm-9 col-md-9">
                        <div class="form-group form-check-label">
                            <label for="description">Categoria</label>
                            <input type="radio" onclick="document.getElementById('Moveis').style.display = 'none', document.getElementById('Info').style.display = 'initial',
                                 document.getElementById('Moveis').style.display = 'none'" value="Informatica"
                                name="categoria">Informatica</input>
                        </div>
                        <div class="col-sm-9 col-md-9 text-left" id="Info">
                            <div class="form-check-label">
                                <label for="">Gabinete:</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <select class="form-control" name="patrimoniogabinete" id="" autofocus>
                                            <option value="" selected>Selecione um Gabinete</option>
                                            @foreach ($gabinete as $invent)
                                            <option value="{{$invent}}">{{$invent}}</option>
                                            @endforeach
                                        </select>
                                        <input class="form-control" type="text" name="cod_gabinete"
                                            placeholder="N° patrimônio" id="" value="{{old('cod_gabinete')}}" autofocus>
                                    </div>
                                </div>

                                <div class="form-check-label">
                                    <label for="">Monitor:</label><!--  -->
                                    <input type="radio" name="Qtd_Monitor" onclick="document.getElementById('qtd2').style.display = 'none',
                                         document.getElementById('qtd1').style.display = 'initial'" value="1">1</input>
                                    <input type="radio" name="Qtd_Monitor" onclick="document.getElementById('qtd1').style.display = 'initial',
                                         document.getElementById('qtd2').style.display = 'initial'" value="2">2</input>
                                </div>
                                <div class="form-check-label">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend" id="qtd1">
                                            <select class="form-control" name="patrimoniomonitor">
                                                <option value="" selected>Selecione um Monitor</option>
                                                @foreach ($monitor as $invent)
                                                <option value="{{$invent}}">{{$invent}}</option>
                                                @endforeach
                                            </select>
                                            <input class="form-control" type="text" id="moni1"
                                                placeholder="N° patrimônio" name="cod_monitor"
                                                value="{{old('cod_monitor')}}" autofocus>
                                        </div>
                                        <div class="input-group-prepend quant" id="qtd2">
                                            <select class="form-control" name="patrimoniomonitor2">
                                                <option value="" selected>Selecione um Monitor2</option>
                                                @foreach ($monitor as $invent)
                                                <option value="{{$invent}}">{{$invent}}</option>
                                                @endforeach
                                            </select>
                                            <input class="form-control" type="text" id="moni2"
                                                placeholder="N° patrimônio(Opcional)" name="cod_monitor2"
                                                value="{{old('cod_monitor2')}}" autofocus>
                                        </div>
                                    </div>

                                    <div class="input-group-prepend col-7 mb-2 row py-0" id="">
                                        <p class="m-1" for="">Descrição</p>
                                        <textarea name="descricaoInfo" class="form-control"
                                            placeholder="descreva inventário de informatica"
                                            id="exampleFormControlTextarea1" rows="3" autofocus>
                                            {{old('descricaoInfo')}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-check-label">
                            <label for="description">Categoria</label>
                            <input type="radio" onclick="document.getElementById('Moveis').style.display = 'initial', document.getElementById('Info').style.display = 'initial',
                                    document.getElementById('Info').style.display = 'initial'" name="categoria"
                                value="Moveis">Móveis</input>
                        </div>
                        <div class="col-sm-9 col-md-9 text-left form-check-label" id="Moveis">
                            <label for="">Mesa:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select class="form-control" name="patrimonioMesa" id="" autofocus>
                                        <option value="" selected>Selecione a mesa</option>
                                        @foreach ($inventariomovel as $invent)
                                        <option value="{{$invent}}">{{$invent}}</option>
                                        @endforeach
                                    </select>
                                    <input class="form-control" size="30" placeholder="Insira o N° patrimônio"
                                        type="text" name="cod_Mesa" id="tab" value="{{old('cod_Mesa')}}" autofocus>
                                </div>
                            </div>

                            <label for="">Cadeira:</label>
                            <div class="input-group form-check-label mt-3 mb-3">
                                <div class="input-group-prepend">
                                    <select class="form-control" name="patrimonioCadeira" id="" autofocus>
                                        <option value="" selected>Selecione a Cadeira</option>
                                        @foreach ($inventariomovel1 as $invent)
                                        <option value="{{$invent}}">{{$invent}}</option>
                                        @endforeach
                                    </select>
                                    <input class="form-control mb-2" size="30" placeholder="Insira o N° patrimônio"
                                        type="text" name="cod_Cadeira" value="{{old('cod_Cadeira')}}" id="gav"
                                        autofocus>
                                </div>
                            </div>

                            <label for="">Outros:</label>
                            <div class="form-check-label input-group mb-2">
                                <div class="input-group-prepend">
                                    <select class="form-control" name="patrimonioOutro" id="">
                                        <option value="" selected>Selecione um Movel (Opcional)</option>
                                        @foreach ($inventariomovel2 as $invent)
                                        <option value="{{$invent}}"> {{$invent}} </option>
                                        @endforeach
                                    </select>
                                    <input class="form-control mb-2" placeholder="Insira o N° patrimônio" type="text"
                                        name="cod_Outro" id="cad" value="{{old('cod_Outro')}}" autofocus>
                                </div>
                            </div>

                            <div class="input-group mb-2">
                                <div class="input-group-prepend col-7 mt-3 mb-1 row py-0" id="">
                                    <p class="m-1" for="">Descrição</p>
                                    <textarea name="descricaoMoveis" class="form-control"
                                        placeholder="descreva inventário de móveis" id="exampleFormControlTextarea1"
                                        rows="3" autofocus>{{old('descricaoMoveis')}}</textarea>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend mt-2 col-6 mb-1">
                                    <p class="m-1" for="">Sala/Equipe</p>
                                    <select name="sala" class="form-control" name="sala" id="" autofocus>
                                        <option value="" selected>Selecione a sala do usuário </option>
                                        @foreach ($salas as $invent)
                                        <option value="{{$invent}}">{{$invent}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary text-white lead mb-3"><i class="fas fa-save"></i>
                            Salvar</button>

                        <a href="{{route('patrimonio.index')}}" type="submit"
                            class="btn btn-secondary text-white lead mb-3 ml-2">
                            <i class="fas fa-chevron-left"></i> Voltar
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection