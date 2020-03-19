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
                            <input type="radio" onclick="document.getElementById('Moveis').style.display = 'none',
                                    document.getElementById('Info').style.display = 'initial',
                                    document.getElementById('Moveis').style.display = 'none'" name="categoria" value="Informatica">Informatica</input>
                        </div>

                        <div class="col-sm-9 col-md-12 text-left">
                            <div class="form-check-label" id="Info">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <p class="m-1" for="">Computador</p>
                                        <select class="form-control" name="" id="">
                                            <option value="">Selecione um computador</option>
                                            <option value="">Computador - HP</option>
                                            <option value="">Computador - Lenovo</option>
                                            <option value="">Computador - Positivo</option>
                                            <option value="">Teclado</option>
                                            <option value="">Outro Tipo</option>
                                        </select>
                                    </div>
                                    <input class="form-control col-5" type="text" name="computador" placeholder="N° patrimônio" id="" autofocus>
                                </div>

                                <div class="form-check-label">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="m-1" for="">Monitor</label><!--  -->
                                            <select class="form-control" name="" id="">
                                                <option value="">Selecione a marca </option>
                                                <option value=""> Monitor - Dell</option>
                                                <option value=""> Monitor - HP</option>
                                                <option value=""> Monitor - Lenovo </option>
                                                <option value=""> Monitor - LG </option>
                                                <option value=""> Monitor - Positivo </option>
                                                <option value="">Monitor - Samsung </option>
                                            </select>
                                        </div>
                                        <input class="form-control" type="text" id="moni1" placeholder="Código 1" name="monitor" autofocus>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="m-1" for="">Monitor2</label><!--  -->
                                            <select class="form-control" name="" id="">
                                                <option value="">Selecione a marca </option>
                                                <option value=""> Monitor - Dell</option>
                                                <option value=""> Monitor - HP</option>
                                                <option value=""> Monitor - Lenovo </option>
                                                <option value=""> Monitor - LG </option>
                                                <option value=""> Monitor - Positivo </option>
                                                <option value="">Monitor - Samsung </option>
                                            </select>
                                        </div>
                                        <input class="form-control" type="text" id="moni2" placeholder="Código 2(Opcional)" name="monitor2" autofocus>
                                    </div>
                                </div>
                                <div class="form-check-label mb-2 row py-0" id="">
                                    <p class="m-1 col-2" for="">Descrição</p>
                                    <textarea class="form-control col-6" placeholder="descreva patromônio" id="exampleFormControlTextarea1" rows="3" autofocus></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group form-check-label">
                            <label for="description">Categoria</label>
                            <input type="radio" onclick="document.getElementById('Moveis').style.display = 'initial',
                                    document.getElementById('Info').style.display = 'initial',
                                    document.getElementById('Info').style.display = 'initial'" name="categoria" value="Móveis">Móveis</input>
                        </div>
                        <div class="col-sm-9 col-md-12 text-left">
                            <div class="form-check-label input-group" id="Moveis">
                                @csrf
                                <div class="input-group-prepend">
                                    <p class="m-1" for="tab" for="name">Mesa </p>
                                    <input class="form-control mb-2" placeholder="Insira o código do patrimonio" type="text" name="mesa" id="tab" autofocus>
                                </div>

                                <div class="input-group-prepend">
                                    <p class="m-1" for="gav" for="name">Cadeira</p>
                                    <input class="form-control mb-2" placeholder="Insira o código do patrimonio" type="text" name="gaveteiro" id="gav" autofocus>
                                </div>

                                <div class="input-group-prepend">
                                    <p class="m-1" for="cad" for="description">Gavateiro</p>
                                    <input class="form-control mb-2" placeholder="Insira o código do patrimonio" type="text" name="cadeira" id="cad" autofocus>
                                </div>

                                <div class="input-group-prepend">
                                    <p class="m-1" for="cad" for="description">Apoio</p>
                                    <input class="form-control" placeholder="Insira o código do patrimonio" type="text" name="cadeira" id="cad" autofocus>
                                </div>

                                <div class="form-check-label mt-3 mb-1 row py-0" id="">
                                    <p class="m-1 col-2" for="">Descrição</p>
                                    <textarea class="form-control col-6" placeholder="descreva inventário de móveis" id="exampleFormControlTextarea1" rows="3" autofocus></textarea>
                                </div>
                            </div>

                            <div class="form-check-label mt-2 mb-2" id="">
                                <div class="input-group-prepend">
                                    <p class="m-1" for="">Sala/Equipe</p>
                                    <select class="form-control" name="" id="">
                                        <option value="">Selecione a sala do usuário </option>
                                        <option value=""> TA13 - Apoio Administrativo</option>
                                        <option value=""> TA14 - Núcleo de TI</option>
                                        <option value=""> TA01 - Sala Reunião</option>
                                    </select>
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

                        <a onclick="document.body.empty = '';" type="submit" class="btn btn-danger text-white lead mb-3 ml-2">
                            <i class="fas fa-broom"></i> Limpar
                        </a>

                        <a onclick="location.reload();" type="submit" class="btn btn-dark text-white lead mb-3 ml-2">
                            <i class="fas fa-retweet"></i> Aualizar
                        </a>
                    </div>
                    <!-- <div class="form-control">
                <label for="quantity">Plenus</label>
                <a class="btn btn-secondary" type="number" name="plenus" id="" autofocus>Adicionar</a>
            </div> -->

            </form>
        </div>
    </div>
</div>

@endsection
