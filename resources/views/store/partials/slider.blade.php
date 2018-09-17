<div id="slider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/banners/awesome.jpeg') }}" style="height: 660px;" class="d-block w-100 img-fluid" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/banners/tshirt_closelinelg.jpg') }}" style="height: 660px;" class="d-block w-100 img-fluid" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/banners/banner.jpg') }}" style="height: 660px;" class="d-block w-100 img-fluid" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><hr>