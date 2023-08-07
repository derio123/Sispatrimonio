<div class="modal-header">
    <h5 class="modal-title text-center" id="exampleModalCenterTitle">Confirma Exclusão</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <p class="text-center">Deseja excluir patrimonio {{$patrimonio->categoria}} ?</p>
</div>
<div class="modal-footer">
    <a href="{{route('patrimonio.index')}}" type="submit" data-dismiss="modal" class="btn btn-secondary ml-2" autofocus title="Cancelar a exlcusão">
        <i class="fas fa-chevron-left fa-2x"></i>
    </a>
    <form method="post" action="{{route('patrimonio.destroy', $patrimonio->id)}}"> {{-- Correção erro não reconhecimento da função destroy --}}
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger fas fa-trash fa-2x" title="Excluir o patrimonio"></button>
    </form>
</div>
