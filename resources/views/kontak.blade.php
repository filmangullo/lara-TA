@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active" style="height:50vh;">
              <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>Kontak</h2>
              </div>
            </div>

        </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

          <div class="section-header">
            <h3>Tanya Kami</h3>
            <p>Adakah hal-hal yang ingin anda tanyakan perihal layanan di website kami? Atau berangkali topik seputar bagaimana budaya serta pariwisata yang telah kami muat di dalam website ini? Silahkan kontak kami melalui form di bawah ini atau via chat/telepon/SMS</p>
          </div>

          <div class="row contact-info">

            <div class="col-md-4">
              <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h3>Address</h3>
                <address>A108 Adam Street, NY 535022, USA</address>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3>Phone Number</h3>
                <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-email">
                <i class="ion-ios-email-outline"></i>
                <h3>Email</h3>
                <p><a href="mailto:info@example.com">info@example.com</a></p>
              </div>
            </div>

          </div>
          <div class="form">
              <form class="form" method="post" action="{{ route('kontak.store') }}">
                  @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                    </div>
                  @endif
                  <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="string" class="form-control"  placeholder="Nama" name="name" data-msg="Please enter at least 4 chars">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="string" class="form-control"  placeholder="Email" name="email"data-msg="Please enter a valid email">
                        <div class="validation"></div>
                    </div>
                  </div>
                    <div class="form-group">
                        <input type="string" class="form-control"  placeholder="Topik" name="topik" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>

                  <div class="form-group">
                      <textarea name="pesan" class="form-control" placeholder="Pesan" rows="5" data-msg="Sampaikan pesan anda disini"></textarea>
                      <div class="validation"></div>
                  </div>
                  <div class="form-group">
                      <div class="text-center"><button type="submit">Kirim Pesan</button>
                  </div>

                  {{ csrf_field() }}
              </form>
          </div>

        </div>
      </section><!-- #contact -->
  </main>
@endsection
