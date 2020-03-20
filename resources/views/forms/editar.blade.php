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

        <form action="{{route('patrimonio.update', $patrimonios->id)}}" method="post" enctype="multipart/form-data">
            <div class="row justify-content-md-center">
                <div class="col-sm-9 col-md-9">

                    {{csrf_field()}}
                    <div class="form-group form-check-label">
                        <label for="description">Categoria</label>
                        <input type="radio" onclick="document.getElementById('Moveis').style.display = 'none',
                                 document.getElementById('Info').style.display = 'initial',
                                 document.getElementById('Moveis').style.display = 'none'" name="categoria" value="{{$patrimonios->id}}">{{$patrimonios->categoria}}</input>
                    </div>

                    <div class="col-sm-9 col-md-9 text-left">
                        <div class="form-check-label" id="Info">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <select class="form-control" name="" id="">
                                        <option selected>Gabinete</option>
                                        <option value="">Gabinete - HP</option>
                                        <option value="">Gabinete - Lenovo</option>
                                        <option value="">Gabinete - Positivo</option>
                                        <option value="">Teclado</option>
                                        <option value="">Outro Tipo</option>
                                    </select>
                                    <input class="form-control" type="text" value="{{$patrimonios->computador}}" name="computador" placeholder="N° patrimônio" id="" autofocus>
                                </div>
                            </div>

                            <div class="form-check-label">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <!--  -->
                                        <select class="form-control" name="" id="">
                                            <option selected>Monitor</option>
                                            <option value=""> Monitor - Dell</option>
                                            <option value=""> Monitor - HP</option>
                                            <option value=""> Monitor - Lenovo </option>
                                            <option value=""> Monitor - LG </option>
                                            <option value=""> Monitor - Positivo </option>
                                            <option value="">Monitor - Samsung </option>
                                        </select>
                                        <input class="form-control" type="text" id="moni1" placeholder="Código 1" name="monitor" value="{{$patrimonios->monitor}}" autofocus>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <!--  -->
                                        <select class="form-control" name="" id="">
                                            <option selected>Monitor 2</option>
                                            <option value=""> Monitor - Dell</option>
                                            <option value=""> Monitor - HP</option>
                                            <option value=""> Monitor - Lenovo </option>
                                            <option value=""> Monitor - LG </option>
                                            <option value=""> Monitor - Positivo </option>
                                            <option value="">Monitor - Samsung </option>
                                        </select>
                                        <input class="form-control" type="text" id="moni2" placeholder="Código 2(Opcional)" name="monitor2" value="{{$patrimonios->monitor2}}" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check-label mb-2 py-0" id="">
                                <p class="m-1" for="">Descrição</p>
                                <textarea class="form-control col-8" placeholder="descreva inventário de informatica" id="exampleFormControlTextarea1" rows="3" autofocus></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="form-group form-check-label">
                        <label for="description">Categoria</label>
                        <input type="radio" onclick="document.getElementById('Moveis').style.display = 'initial', document.getElementById('Info').style.display = 'initial',
                                    document.getElementById('Info').style.display = 'initial'" name="categoria" value="Móveis">Móveis</input>
                    </div>
                    <div class="col-sm-9 col-md-9 text-left">
                        <div class="form-check-label" id="Moveis">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select class="form-control" name="" id="">
                                        <option selected>Móvel 1</option>
                                        <option value="Mesa"> Mesa </option>
                                    </select>
                                    <input class="form-control mb-2" size="30" placeholder="Insira o código do patrimonio" type="text" name="mesa" value="{{$patrimonios->mesa}}" id="tab" autofocus>
                                </div>

                                <div class="input-group-prepend">
                                    <select class="form-control" name="" id="">
                                        <option selected>Móvel 2</option>
                                        <option value="Mesa"> Cadeira </option>
                                    </select>
                                    <input class="form-control mb-2" size="30" placeholder="Insira o código do patrimonio" type="text" name="cadeira" value="{{$patrimonios->cadeira}}" id="cad" autofocus>
                                </div>

                                <div class="input-group-prepend">
                                    <select class="form-control" name="" id="">
                                        <option selected>Outros</option>
                                        <option value=""> Apoio</option>
                                        <option value=""> Gaveteiro </option>
                                    </select>
                                    <input class="form-control mb-2" size="30" placeholder="Insira o código do patrimonio" type="text" name="cadeira" value="{{$patrimonios->cadeira}}" id="outros" autofocus>
                                </div>

                                <div class="form-check-label col-8 mt-3 mb-1 row py-0" id="">
                                    <p class="m-1" for="">Descrição</p>
                                    <textarea class="form-control" placeholder="descreva inventário de móveis" id="exampleFormControlTextarea1" rows="3" autofocus></textarea>
                                </div>



                                <div class="form-check-label mt-2 mb-1" id="">
                                    <div class="input-group-prepend">
                                        <p class="m-1" for="">Sala/Equipe</p>
                                        <select class="form-control" name="" id="">
                                            <option selected>Selecione a sala do usuário </option>
                                            <option value=""> TA13 - Apoio Administrativo</option>
                                            <option value=""> TA14 - Núcleo de TI</option>
                                            <option value=""> TA01 - Sala Reunião</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- <label class="card display-4 mt-2 p-1 align-center text-center fundoCard" for="name">Atribui para usuário</label>
                            <select class="form-control px-3 mb-3" name="user" id="user1">
                                <option selected value="">Selecione um usuario </option>
                                <option value="">Jonh Boo Santos</option>
                                <option value="">Jonh Boo Santos</option>
                                <option value="">Jonh Boo Santos</option>
                                <option value="">Jonh Boo Santos</option>
                                <option value="">Jonh Boo Santos</option>
                                <option value="">Jonh Boo Santos</option>
                            </select> -->
                        </div>
                        <button type="submit" class="btn btn-primary text-white lead mb-3"><i class="fas fa-save"></i> Salvar</button>

                        <a href="{{route('patrimonio.index')}}" type="submit" class="btn btn-secondary text-white lead mb-3 ml-2">
                            <i class="fas fa-chevron-left"></i> Voltar
                        </a>
                    </div>
                    <!-- <div class="form-control">
                <label for="quantity">Plenus</label>
                <a class="btn btn-secondary" type="number" name="plenus" id="" autofocus>Adicionar</a>
            </div> -->
                </div>

        </form>
    </div>
</div>
@endsection
