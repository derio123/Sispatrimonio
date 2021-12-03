@extends('layouts.layout')
@section('content')

<div class="uper">
    <div class="text-center">
        <h3>Editar Inventários</h3>
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

        <form action="{{route('patrimonio.update', $patrimonio->id)}}" method="post" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="row justify-content-md-center">
                <div class="col-sm-9 col-md-9">
                    <div class="form-group form-check-label">
                        <label for="description">Categoria</label>
                        <input type="radio" onclick="document.getElementById('Moveis').style.display = 'none',
                                document.getElementById('Info').style.display = 'initial',
                                document.getElementById('Moveis').style.display = 'none'" name="categoria"
                            value="Informatica">Informatica</input>
                    </div>

                    <div class="col-sm-9 col-md-9 text-left">
                        <div class="form-check-label" id="Info">
                            <label for="">Gabinete:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <select class="form-control" name="patrimoniogabinete" id="">
                                        <option value="" disabled selected>Selecione um Gabinete</option>
                                        @foreach ($gabinete as $invent)
                                        <option value="{{$invent}}" @if ( @isset($patrimonio) && $patrimonio->
                                            patrimoniogabinete == $invent)
                                            selected
                                            @endif>{{$invent}}</option>
                                        @endforeach
                                    </select>
                                    <input class="form-control" type="text" value="{{$patrimonio->cod_gabinete}}"
                                        name="cod_gabinete" placeholder="N° patrimônio" id="" autofocus>
                                </div>
                            </div>

                            <div class="form-check-label">
                                <label for="">Monitor:</label>
                                <input type="radio" name="Qtd_Monitor" onclick="document.getElementById('qtd2').style.display = 'none',
                                     document.getElementById('qtd1').style.display = 'initial'" value="1">1</input>
                                <input type="radio" name="Qtd_Monitor" onclick="document.getElementById('qtd1').style.display = 'initial',
                                     document.getElementById('qtd2').style.display = 'initial'" value="2">2</input>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend" id="qtd1">
                                        <select class="form-control" name="patrimoniomonitor" id="">
                                            <option value="" selected>Selecione um Monitor</option>
                                            @foreach ($monitor as $invent)
                                            <option value="{{$invent}}" @if ( @isset($patrimonio) && $patrimonio->
                                                patrimoniomonitor == $invent)
                                                selected
                                                @endif >{{$invent}}</option>
                                            @endforeach
                                        </select>
                                        <input class="form-control" type="text" id="moni1" placeholder="Código 1"
                                            name="cod_monitor" value="{{$patrimonio->cod_monitor}}" autofocus>
                                    </div>
                                    <div class="input-group-prepend quant" id="qtd2">
                                        <select class="form-control" name="patrimoniomonitor2">
                                            <option value="" selected>Selecione um Monitor</option>
                                            @foreach ($monitor as $invent)
                                            <option value="{{$invent}}" @if ( @isset($patrimonio) && $patrimonio->
                                                patrimoniomonitor2 == $invent)
                                                selected
                                                @endif>{{$invent}}</option>
                                            @endforeach
                                        </select>
                                        <input class="form-control" type="text" id="moni2"
                                            placeholder="Código 2(Opcional)" name="cod_monitor2"
                                            value="{{$patrimonio->cod_monitor2}}" autofocus>
                                    </div>
                                </div>

                            </div>
                            <div class="form-check-label mb-2 py-0" id="">
                                <p class="m-1" for="">Descrição</p>
                                <textarea class="form-control col-8" placeholder="descreva inventário de informatica"
                                    id="exampleFormControlTextarea1" rows="3" name="descricaoInfo"
                                    autofocus>{{$patrimonio->descricaoInfo}}</textarea>
                            </div>
                        </div>
                    </div>


                    <div class="form-group form-check-label">
                        <label for="description">Categoria</label>
                        <input type="radio" onclick="document.getElementById('Moveis').style.display = 'initial', document.getElementById('Info').style.display = 'initial',
                                    document.getElementById('Info').style.display = 'initial'" name="categoria"
                            value="Móveis">Móveis</input>
                    </div>
                    <div class="col-sm-9 col-md-9 text-left">
                        <div class="form-check-label" id="Moveis">
                            <label for="">Mesa:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select class="form-control" name="patrimonioMesa" id="">
                                        <option value="" disabled selected>Selecione a mesa</option>
                                        @foreach ($inventariomovel as $invent)
                                        <option value="{{$invent}}" @if ( @isset($patrimonio) && $patrimonio->
                                            patrimonioMesa == $invent)
                                            selected
                                            @endif>{{$invent}}</option>
                                        @endforeach
                                    </select>
                                    <input class="form-control mb-2" size="30"
                                        placeholder="Insira o código do patrimonio" type="text" name="cod_Mesa"
                                        value="{{$patrimonio->cod_Mesa}}" id="tab" autofocus>
                                </div>
                            </div>

                            <label for="">Cadeira:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select class="form-control" name="patrimonioCadeira" id="">
                                        <option value="" selected>Selecione a Cadeira</option>
                                        @foreach ($inventariomovel1 as $invent)
                                        <option value="{{$invent}}" @if ( @isset($patrimonio) && $patrimonio->
                                            patrimonioCadeira == $invent)
                                            selected
                                            @endif>{{$invent}}</option>
                                        @endforeach
                                    </select>
                                    <input class="form-control mb-2" size="30"
                                        placeholder="Insira o código do patrimonio" type="text" name="cod_Cadeira"
                                        value="{{$patrimonio->cod_Cadeira}}" id="cad" autofocus>
                                </div>
                            </div>

                            <label for="">Outros:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select class="form-control" name="patrimonioOutro" id="">
                                        <option value="" selected>Selecione um Movel (Opcional)</option>
                                        @foreach ($inventariomovel2 as $invent)
                                        <option value="{{$invent}}" @if ( @isset($patrimonio) && $patrimonio->
                                            patrimonioOutro == $invent)
                                            selected
                                            @endif>{{$invent}} </option>
                                        @endforeach
                                    </select>
                                    <input class="form-control mb-2" size="30"
                                        placeholder="Insira o código do patrimonio" type="text" name="cadeira"
                                        value="{{$patrimonio->cod_Outro}}" id="outros" autofocus>
                                </div>

                                <div class="form-check-label col-8 mt-3 mb-1 row py-0" id="">
                                    <p class="m-1" for="">Descrição</p>
                                    <textarea class="form-control" placeholder="descreva inventário de móveis"
                                        id="exampleFormControlTextarea1" rows="3"
                                        autofocus>{{$patrimonio->descricaoMoveis}}</textarea>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend mt-2 col-9 mb-1">
                                        <p class="m-1" for="">Sala/Equipe</p>
                                        <select name="sala" class="form-control" name="sala" id="" required>
                                            <option value="" selected>Selecione a sala do usuário </option>
                                            @foreach ($salas as $item)
                                            <option value="{{$item}}" @if (@isset($patrimonio) && $patrimonio->sala ==
                                                $item)
                                                selected
                                                @endif>{{$item}}</option>
                                            @endforeach
                                        </select>
                                    </div>
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
@endsection