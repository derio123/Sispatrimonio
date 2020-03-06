<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p class="card-text">Usuario: Jonh boo santos</p>
      <table class="table table-striped">
        <thead>
          <tr>
            @php
              var_dump($patrimonio)
            @endphp
            <th>Categoria</th>
            <th>Patrimonios</th>
            <th>Cod. Patrimonio</th>
            <th>Plenus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$patrimonio->categoria}}</td>
            <td></td>
            <td>{{$patrimonio->computador}}-{{$patrimonio->monitor}}</td>
            <td>  </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>