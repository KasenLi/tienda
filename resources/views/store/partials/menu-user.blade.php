@if(Auth::check())
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('auth.logout')}}">{{trans('app.logout')}}</a>
        </div>
      </li>
@else
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i><span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('login')}}">{{trans('app.login')}}</a>
          <a class="dropdown-item" href="{{ route('register')}}">{{trans('app.register')}}</a>
        </div>
      </li>
@endif