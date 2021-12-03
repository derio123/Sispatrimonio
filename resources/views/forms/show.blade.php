<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

      <div class="input-group">
        <div class="input-group-prepend col-6 text-left">
          <h3><span class="badge badge-danger">Usuário: Jonh boo santos</span></h3>
        </div>
        <div class="input-group-prepend col-6 text-left">
          <h3><span class="badge badge-danger">Sala: {{$patrimonio->sala}}</span></h3>
        </div>
      </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>Categoria</th>
            <th>Patrimonios</th>
            <th>Código</th>
            {{-- <th>Plenus</th> --}}
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$patrimonio->categoria}}</td>
            <td>{{$patrimonio->patrimoniogabinete}}</td>
            <td>{{$patrimonio->cod_gabinete}}</td>
          </tr>
          <tr>
            <td>{{$patrimonio->categoria}}</td>
            <td>{{$patrimonio->patrimoniomonitor}}
              <br>
              {{$patrimonio->patrimoniomonitor2}}</td>
            <td>{{$patrimonio->cod_monitor}}
              <br>
              {{$patrimonio->cod_monitor2}}</td>
          </tr>
          <tr>
            <td>{{$patrimonio->categoria}}</td>
            <td>{{$patrimonio->patrimonioMesa}}</td>
            <td>{{$patrimonio->cod_Mesa}}</td>
          </tr>
          <tr>
            <td>{{$patrimonio->categoria}}</td>
            <td>{{$patrimonio->patrimonioCadeira}}</td>
            <td>{{$patrimonio->cod_Cadeira}}</td>
          </tr>
          <tr>
            <td>{{$patrimonio->categoria}}</td>
            <td>{{$patrimonio->patrimonioOutro}}</td>
            <td>{{$patrimonio->cod_Outro}}</td>
          </tr>
        </tbody>

      </table>
    </div>
    <div class="modal-footer">
      <a class="btn btn-danger" data-dismiss="modal">
        <i class="fas fa-times fa-2x"></i>
      </a>
    </div>
  </div>
</div>