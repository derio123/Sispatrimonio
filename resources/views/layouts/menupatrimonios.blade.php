<nav class="nav bg-dark justify-content-end" role="tablist" aria-orientation="vertical">
    <ul class="nav nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active text-white" href="{{route('patrimonio.index')}}">
                <i class="fas fa-clipboard-list"></i>
                Inventários
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-white" href="{{ route('patrimonio.create')}}"><i class="fas fa-plus"></i>Adicionar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-white" href="{{ url('categorias')}}"><i class="fas fa-sitemap"></i> Categorias</a>
        </li>
    </ul>
</nav>