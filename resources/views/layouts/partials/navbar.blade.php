<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Clinica</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('paciente.index') }}">Pacientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('marcacao.index') }}">Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('servicos.index')}}">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gestao_ambulatorio.index') }}">Ambulatório</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Faturas e Contas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('menuRelatorios.index')}}">Relatórios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teste.index') }}">Testes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('funcionario.index') }}">Funcionários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Departamentos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
