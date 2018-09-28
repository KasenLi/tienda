<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand main-title" href="{{ route('home')}}">Tienda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <span class="navbar-text">My Laravel Store</span>
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><a class="nav-link" href="{{ route('cart-show')}}"><i class="fa fa-shopping-cart"></i></a></li>
      <li class="nav-item"><a class="nav-link" href="#">Conócenos</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Contactos</a></li>
      @include('store.partials.menu-user')
    </ul>
    
  </div>
</nav>