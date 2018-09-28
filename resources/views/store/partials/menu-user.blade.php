@if(Auth::check())
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ Auth::logout()}}">Cerrar Sesión</a>
        </div>
      </li>
@else
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i><span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('login')}}">Iniciar Sesión</a>
        </div>
      </li>
@endif