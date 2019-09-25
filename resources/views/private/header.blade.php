<nav class=" navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">
        <img src="{{asset('images/logo1.png')}}" width="100" height="15" class="d-inline-block align-top mr-3" alt="">
        SOD-UNISUAM
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Pagina Inicial <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
{{--                {{$nucleo or "Teste"}}--}}
                <a class="nav-link" href="#">Informações do Nucleo </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cadastros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Cliente</a>
                         <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Funcionário</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Consultas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Relatórios</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Dashboard</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Fila</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Agenda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Localizador de Pessoas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Blog</a>
            </li>

        </ul>
        <ul class="navbar-nav mr-5">

            <li class="float-right nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Perfil
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Informações de Perfil</a>
{{--                    {{$User or "Leonardo"}}--}}
                    <a class="bg-info dropdown-item text-center"></a>
{{--                    {{$acesso or "Teste"}}--}}
                    <a class="bg-info dropdown-item text-center"></a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout">Logout</a>
                </div>
            </li>
            <img src="{{asset('images/user.PNG')}}" width="50" height="40" alt="">
        </ul>
    </div>
</nav>

<script>
    export default {
        data () {
            return {
                nucleo: "Polen",
                User: "SOD",
                Cargo: "Unisuam"
            }
        }
    }


</script>
