@extends('master')

@section('css')
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@endsection


@section('content')
<main>

    <section class="py-5 content-center container">
      <div id="carrousel" class="row py-lg-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/banner.jpg" class="imgcarrousel" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner2.jpg" class="imgcarrousel" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner2.jpg" class="imgcarrousel" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <section id="seccion1">
        <div class="servicio">

        </div>
  
        <div class="servicio">
  
        </div>
        <div class="servicio">
  
        </div>
        <div class="servicio">
  
        </div>
        <div class="servicio">
  
        </div> 
    </section>

    <section >
        {{-- <div class="div1">
          <h1>REVIEWS</h1>
          <h2>Comentarios</h2>
        </div> --}}
        @include('inicio/reviews')
    </section>

    <section >
      <div class="div2">
        <p>ahhhhhhhhhhhhhhhhh</p>
        <h1>aaaaaaaaaaa</h1>
        <h2>ahhhhhhhhhh</h2>
      </div>
  </section>

  <section >
    <div class="div3">
      <p>ahhhhhhhhhhhhhhhhh</p>
      <h1>COBERTURA</h1>
      <h2>ahhhhhhhhhh</h2>
    </div>
</section>


  </main>
    
@endsection