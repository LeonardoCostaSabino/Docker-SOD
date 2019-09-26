<nav class="navbar navbar-toggler navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">SOD-UNISUAM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <?php
            $url = url()->current();
            $url = explode('/',$url);
            ?>
            @if($url[count($url)-1]=="login")
                <li class="nav-item active">
            @else
                <li class="nav-item">
            @endif
                <a class="nav-link" href="login">Entrar<span class="sr-only">(Página atual)</span></a>
            </li>
            @if($url[count($url)-1]=="funcoes")
                <li class="nav-item active">
            @else
                <li class="nav-item">
            @endif
                <a class="nav-link" href="funcoes">Funcionalidades do SOD</a>
            </li>
            @if($url[count($url)-1]=="sobre")
                <li class="nav-item active">
            @else
                <li class="nav-item">
            @endif
                <a class="nav-link" href="sobre">Sobre nós</a>
            </li>
            <span class="font-italic navbar-text text-center text-warning">
                SOD o Sistema de Otimização de Dados da Unisuam que foi para voce!
            </span>
        </ul>
    </div>
</nav>
