
<nav class="navbar navbar-light" style="background-color: #F0B8B8;">
  <a class="navbar-brand" href="{{ url('/buscar')}}">Inicio</a>
  <a class="navbar-brand" href="#">Medicos</a>
  <a class="navbar-brand" href="{{ url('/pacientes.list') }}">Pacientes</a>
  <a class="navbar-brand" href="#">Sistemas</a>
  
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>

<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
</nav>
