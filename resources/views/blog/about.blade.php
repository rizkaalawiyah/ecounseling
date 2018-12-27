@extends('layouts.master')

@section('content')
        <!-- Mengenai Kami-->
        <section id="tentang" class="tentang pt-5">
          <div class="container">
            <div class="row mb-4">
            <div class="col text-center">
 
            </div>      
            </div>
            <div class="row">
              <div class="col text-justify">
                <img class="tentang" src="{{ url('img/about/about-header.png') }}">
                </div>
              <div class="col text-justify">
                <h3>MENGENAI KAMI</h3><br>
                <h2>Kami Adalah Pelopor Gaya Hidup Sehat Mental, Bebas Dari Masalah.</h2><br>
                  <p>Melalui kemudahan teknologi dan sentuhan psikologi, Riliv menyajikan layanan konseling untuk menciptakan senyum di seluruh pelosok Indonesia, seperti Anda.</p>
                              
              </div>
            </div>
          </div>
          </section>

        <!-- Mengenai Kami2-->
        <section id="tentang2" class="tentang2 pt-5 pb-5">
          <div class="container">
            <div class="row mb-4">
            <div class="col text-center">
 
            </div>      
            </div>
            <div class="row">
              <div class="col text-justify">
                <h1>Semua berawal dari …</h1> <br>
                <p>Banyak orang curhat di media sosial. Berharap mendapat dukungan, namun membawa pulang makian. Bila bercerita lewat teks dan smartphone begitu mudah, mengapa tidak menciptakan teman curhat profesional yang siap membantumu tanpa menghakimi?.</p>
                </div>
              <div class="col text-justify">
                <img class="tentang2" src="{{ url('img/about/about-section-2-hero.png') }}">

                              
              </div>
            </div>
          </div>
          </section>
      <!-- Team -->

      <section id="team " class="team bg-light pb-4 pt-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h1 class="team">Team Kami</h1>
          </div>
        </div>
        <div class="row mb-4 ">
          <div class="col-md">
          <div class="card" >
            <img class="card-img-top" src="{{ url('img/about/rizka.jpeg') }}" alt="Card image cap">
            <div class="card-body">
               <h4 class="card-text text-center">Rizka Alawiyah</h4>
            </div>
          </div>
          </div>
          <div class="col-md">
          <div class="card" >
            <img class="card-img-top" src="{{ url('img/about/silmi.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-text text-center">Silmi A Athqia</h4>
            </div>
          </div>
          </div>
          <div class="col-md">        
          <div class="card" >
            <img class="card-img-top" src="{{ url('img/professional.png') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-text text-center">Iis Kholisah</h4>
            </div>
          </div>
          </div>
        </div>
      </div>
      </section>


@endsection