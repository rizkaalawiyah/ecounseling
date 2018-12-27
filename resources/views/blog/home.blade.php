@extends('layouts.master')

@section('content')
        <!-- Jumbotron -->
        <div class="jumbotron">
          <div class="container">
          <h1 class="display-4" >Your Identity, Our Responsibility</h1>
          <hr class="my-4">
          <p>Dapatkan jawaban atas segala masalah pribadi atau konsultasi masalah psikologis dengan psikolog kami yang berlisensi dan profesional via teks.</p>
          <p class="lead">
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-primary btn-lg " role="button" href="{{ route('register') }}">{{ __('KONSELING SEKARANG') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  class="btn btn-primary btn-lg dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hi, {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">  

                                  <a class="dropdown-item" href="{{ url('private') }}">
                                        ChatBox
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          </p>
          </div>
        </div>


        <!-- about-->
        <section id="about" class="about">
          <div class="container">
            <div class="row mb-4">
            <div class="col text-center">

            </div>
            </div>
            <div class="row">
              <div class="col text-justify">
                <img class="about" src="{{ url('img/home-section-2-hero.png') }}">
                </div>
              <div class="col text-justify">
                <h1>E-Counseling terpercaya, <br> mari bicara! </h1> <br>
                <p>E-Counseling memanfaatkan teknologi untuk membantu lebih banyak orang mengakses layanan kesehatan mental secara online. Dengan pengolahan data yang baik, kami tidak hanya memastikan Anda mendapatkan psikolog yang cocok, tetapi teknik konseling yang paling efektif sesuai kepribadian dan karakter Anda.</p>

              </div>
            </div>
          </div>
          </section>

        <!-- Lakukan dengan caramu-->
        <section class="doit">
          <h1 class="doit text-center">Lakukan dengan caramu!</h1> <br>
          <p class="doit text-center">Nikmati kemudahan konseling teks dengan jadwal yang fleksibel dan sesi konseling <br>sesuai kebutuhanmu</p>

        </section>

        <!-- Lakukan dimanapun-->

  <section id="services " class="services bg-light pb-4 pt-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col text-center">
        <h1 class="services">Curhatkan Masalah Anda <br> Dimanapun dan Kapanpun</h1>
      </div>
    </div>
    <div class="row mb-4 ">
      <div class="col-md">
      <div class="card mb-3" >
        <img class="card-img-top" src="{{ url('img/praktis.png') }}" alt="Card image cap">
        <div class="card-body">
           <h4 class="card-text text-center">Praktis</h4>
          <p class="card-text text-justify">Konseling dan curhat online dengan ccepat dan mudah, tanpa harus datang ke kantor psikolog. Lakukan konseling sesuai jadwal anda kapanpun dan dimanapun.</p>
        </div>
      </div>
      </div>
      <div class="col-md">
      <div class="card mb-3" >
        <img class="card-img-top" src="{{ url('img/lengkap.png') }}" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-text text-center">Bersahabat</h4>
          <p class="card-text text-justify">Bebaskan dan keluarkan ceritamu dengan psikolog kami yang siap mendengar, memahami dan membantu mencari solusi, tanpa menghakimi.</p>
        </div>
      </div>
      </div>
      <div class="col-md">
      <div class="card mb-3" >
        <img class="card-img-top" src="{{ url('img/professional.png') }}" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-text text-center">Professional</h4>
          <p class="card-text text-justify">Bukan sekedar teman curhat, seluruh psikolog memiliki kompetensi terbaik dibidangnya yang menjamin pengalaman terbaik dalam konseling.</p>
        </div>
      </div>
      </div>
    </div>
  </div>
  </section>

          <!-- about-->
        <section id="services2" class="services2 pt-5 pb-4">
          <div class="container">
            <div class="row mb-4">
            <div class="col text-center">

            </div>
            </div>
            <div class="row">
              <div class="col-8 text-justify ">
                <h1>Psikolog Profesional Ada di Saku Anda 24/7</h1> <br>
                <p>Semua psikolog kami telah berlisensi, berpengalaman dan profesional yang dapat membantu Anda untuk melewati masa sulit ini atau memberikan perubahan positif di hidup Anda. Mereka akan dengan senang hati membantu tanpa membuat Anda merasa malu atau terhakimi. Semua sesi konseling dilakukan secara personal dan sesuai kode etik psikologi.</p>
                <br>

                </div>
              <div class="col-4 text-justify">
                <img class="services2" src="{{ url('img/home-section-6.png') }}">

              </div>
            </div>
          </div>
          </section>


                    <!-- Cara daftar-->
        <section id="daftar" class="daftar pt-5 pb-4">
          <div class="container">
            <div class="row mb-4">
            <div class="col text-center">

            </div>
            </div>
            <div class="row">
              <div class="col-md-6 text-justify ">
                <img src="{{ url('img/mockup-android.jpg') }}">
                <br>
                </div>
              <div class="col-2 text-justify">
                <div class="row pt-5">
                  <img src="{{ url('img/pilih-paket.png') }}">
                </div>
                <div class="row pt-5">
                  <img src="{{ url('img/penilaian.png') }}">
                </div>
                <div class="row pt-5">
                  <img src="{{ url('img/home-section-7-konseling.png') }}">
                </div>

              </div>
              <div class="col-4 text-justify">
                <div class="row pt-5">
                  <h6>1. Pilih Paket</h6>
                  <p>Pilih cara dan paket konseling yang Anda inginkan di sini</p>
                </div>
                <div class="row pt-5">
                  <h6>2. Pilih Paket</h6>
                  <p>Pilih cara dan paket konseling yang Anda inginkan di sini</p>
                </div>
                <div class="row pt-5">
                  <h6>3. Pilih Paket</h6>
                  <p>Pilih cara dan paket konseling yang Anda inginkan di sini</p>
                </div>

              </div>
            </div>
          </div>
          </section>


        <!-- email-->
        <section class="email pt-5 pb-4">
          <p class="email text-center">Daftarkan alamat email Anda sekarang <br>
            dan jadi yang pertama tahu tentang promo terbaru E-Counseling!</p>
            <br>
            <input type="email" name="email" >
            <a class="btn btn-primary btn-lg " href="#" role="button">Daftar </a>
        </section>

@endsection