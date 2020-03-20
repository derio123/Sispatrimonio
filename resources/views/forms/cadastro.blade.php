@extends('layouts.layout')
@section('content')

<div class="container">

    <div class="uper">
        <div class="text-center">
            <h3 class="card display-4 p-1 align-center text-center jumbotron">Adicionar Inventários</h3>
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

            <!-- Inserir os dados para cadastro -->
            <form action="{{route('patrimonio.store')}}" method="post" enctype="multipart/form-data">
                <div class="row justify-content-md-center">
                    <div class="col-sm-9 col-md-9">

                        {{csrf_field()}}
                        <div class="form-group form-check-label">
                            <label for="description">Categoria</label>
                            <input type="radio" onclick="document.getElementById('Moveis').style.display = 'none', document.getElementById('Info').style.display = 'initial',
                                 document.getElementById('Moveis').style.display = 'none'" name="categoria">Informatica</input>
                        </div>

                        <div class="col-sm-9 col-md-9 text-left" id="Info">
                            <div class="form-check-label">
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
                                        <input class="form-control" type="text" name="computador" placeholder="N° patrimônio" id="" autofocus>
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
                                                <option value=""> Monitor - Samsung </option>
                                            </select>
                                            <input class="form-control" type="text" id="moni1" placeholder="N° patrimônio" name="monitor" autofocus>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <!--  -->
                                            <select class="form-control" name="" id="">
                                                <option selected>Monitor 2(Opcional)</option>
                                                <option value=""> Monitor - Dell</option>
                                                <option value=""> Monitor - HP</option>
                                                <option value=""> Monitor - Lenovo </option>
                                                <option value=""> Monitor - LG </option>
                                                <option value=""> Monitor - Positivo </option>
                                                <option value=""> Monitor - Samsung </option>
                                            </select>
                                            <input class="form-control" type="text" id="moni2" placeholder="N° patrimônio(Opcional)" name="monitor2" autofocus>
                                        </div>
                                    </div>
                                    <div class="input-group-prepend col-7 mb-2 row py-0" id="">
                                        <p class="m-1" for="">Descrição</p>
                                        <textarea class="form-control" placeholder="descreva inventário de informatica" id="exampleFormControlTextarea1" rows="3" autofocus></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="form-group form-check-label">
                            <label for="description">Categoria</label>
                            <input type="radio" onclick="document.getElementById('Moveis').style.display = 'initial', document.getElementById('Info').style.display = 'initial',
                                    document.getElementById('Info').style.display = 'initial'" name="categoria" value="Móveis">Móveis</input>
                        </div>
                        <div class="col-sm-9 col-md-9 text-left" id="Moveis">

                            <div class="input-group">
                                @csrf
                                <div class="input-group-prepend">
                                    <select class="form-control" name="" id="">
                                        <option selected>Móvel1</option>
                                        <option value="Mesa"> Mesa </option>
                                    </select>
                                    <input class="form-control" size="30" placeholder="Insira o N° patrimônio" type="text" name="mesa" id="tab" autofocus>
                                </div>
                            </div>

                            <div class="input-group mt-3 mb-3">
                                <div class="input-group-prepend">
                                    <select class="form-control" name="" id="">
                                        <option selected>Móvel2</option>
                                        <option value=""> Cadeira </option>
                                    </select>
                                    <input class="form-control mb-2" size="30" placeholder="Insira o N° patrimônio" type="text" name="cadeira" id="gav" autofocus>
                                </div>
                            </div>

                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <select class="form-control" name="" id="">
                                        <option selected>Outros (Opcional)</option>
                                        <option value=""> Apoio</option>
                                        <option value=""> Gaveteiro </option>
                                    </select>
                                    <input class="form-control mb-2" placeholder="Insira o N° patrimônio" type="text" name="Outros" id="cad" autofocus>
                                </div>
                            </div>

                            <div class="input-group mb-2">
                                <div class="input-group-prepend col-7 mt-3 mb-1 row py-0" id="">
                                    <p class="m-1" for="">Descrição</p>
                                    <textarea class="form-control" placeholder="descreva inventário de móveis" id="exampleFormControlTextarea1" rows="3" autofocus></textarea>
                                </div>
                            </div>

                            <div class="input-group-prepend mt-2 col-7 mb-1">
                                <p class="m-1" for="">Sala/Equipe</p>
                                <select class="form-control" name="" id="">
                                    <option selected>Selecione a sala do usuário </option>
                                    <option value=""> TA13 - Apoio Administrativo</option>
                                    <option value=""> TA14 - Núcleo de TI</option>
                                    <option value=""> TA01 - Sala Reunião</option>
                                </select>
                            </div>


                        </div>
                        <button type="submit" class="btn btn-primary text-white lead mb-3"><i class="fas fa-save"></i> Salvar</button>

                        <a href="{{route('patrimonio.index')}}" type="submit" class="btn btn-secondary text-white lead mb-3 ml-2">
                            <i class="fas fa-chevron-left"></i> Voltar
                        </a>
                    </div>
                </div>

            </form>
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
<!-- <div class="form-control">
                <label for="quantity">Plenus</label>
                <a class="btn btn-secondary" type="number" name="plenus" id="" autofocus>Adicionar</a>
            </div> -->
@endsection
