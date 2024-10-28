<div id="carouselExampleDark" class="carousel carousel-dark slide"  data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ $articles[0]->image }}" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $articles[0]->title }}</h5>
        <p>{{str_limit($articles[0]->content,100)}}</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ $articles[1]->image }}" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $articles[1]->title }}</h5>
        <p>{{str_limit($articles[1]->content,100)}}</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ $articles[2]->image }}" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $articles[2]->title }}</h5>
        <p>{{str_limit($articles[2]->content,100)}}</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>