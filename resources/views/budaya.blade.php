@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="img/intro-carousel/sampulbudaya.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>KEBUDAYAAN</h2>
              </div>
            </div>
          </div>
        </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header" style="">
          <h4>Kebudayaan Pulau Nias </h4>
        </header>
        @foreach ($artikel->budayas as $budaya)
        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                  <img src="img/{{ $budaya->budaya_Gambar }}" alt="" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">{{ $budaya->budaya_Lokasi }}</a></h2>
            </div>
        </div>
        @endforeach
      </div>
    </section>

  </main>
@endsection
