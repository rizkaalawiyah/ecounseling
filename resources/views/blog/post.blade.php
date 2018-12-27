@extends('layouts.master')

@section('content')

      <section id="about" class="about pt-5 mt-5">
          <div class="container  mt-5">
            <div class="row mb-4">
            <div class="col text-center">

            </div>
            </div>
            <div class="row">
              <div class="col text-justify">
                <img class="about" src="{{ url('img/blog/tinggi.jpg') }}">
                </div>
              <div class="col text-justify">
                <h1 href="{{ url('blog/tinggi') }}">6 Cara Mengatasi Takut Ketinggian</h1> <br>
                <p>Acrophobia atau takut terhadap ketinggian sangat umum terjadi, yaitu sekitar 5% dari populasi. Acrophobia cenderung berbahaya karena serangan panik di ketinggian bisa membuat seseorang menjadi hilang kendali dan berakibat fatal.</p>

              </div>
            </div>
          </div>
          </section>

       


  <section id="services " class="services bg-light pb-4 pt-5">
  <div class="container">
    <div class="row mb-4 ">

      <div class="col-md">
      <div class="card mb-3" >
        <img class="card-img-top" src="{{ url('img/blog/ciri.jpg') }}" alt="Card image cap">
        <div class="card-body">
           <h4 class="card-text text-center"  href="{{ url('blog/ciri') }}">Apakah Mood Swings yang Kamu Alami Merupakan Ciri-Ciri Bipolar? Ini Penjelasannya! </h4>
          <p class="card-text text-justify">Gangguan bipolar ditandai dengan perubahan suasana hati atau mood swings, yaitu dari fase mania (sangat bahagia) ke fase depresi (sangat sedih). Tak heran jika selama ini mood swings dianggap sebagai ciri-ciri bipolar.</p>
        </div>
      </div>
      </div>

      <div class="col-md">
      <div class="card mb-3" >
        <img class="card-img-top" src="{{ url('img/blog/depresi.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-text text-center" href="{{ url('blog/depresi') }}"> Cara Mengatasi Depresi Berat yang Dilakukan Pemuda Ini Akan Membuatmu Kagum!
          </h4>
          <p class="card-text text-justify">Aku Harry, seorang Event and Community Officer. Walaupun tanganku gemetar dan dadaku terasa berat ketika menulis ini, aku berusaha untuk tetap tenang sembari menuliskan kata demi kata.</p>
        </div>
      </div>
      </div>




      <div class="col-md">
      <div class="card mb-3" >
        <img class="card-img-top" src="{{ url('img/blog/senang.jpg') }} " alt="Card image cap" >
        <div class="card-body">
          <h4 class="card-text text-center" href="{{ url('blog/senang') }}">Sedih atau Depresi? Berikut Ciri-Ciri Orang Depresi yang Perlu Kamu Ketahui!  </h4>
          <p class="card-text text-justify">Apakah kamu memiliki mood yang buruk, dear? Kamu mungkin sedang mengalami kesedihan hingga mempengaruhi moodmu atau mungkin saja depresi sedang menyerangmu!</p>
        </div>
      </div>
      </div>



      <div class="col-md">
      <div class="card mb-3" >
        <img class="card-img-top" src="{{ url('img/blog/takut.jpg') }} " alt="Card image cap" >
        <div class="card-body">
          <h4 class="card-text text-center" href="{{ url('blog/takut') }}"> Ketakutan Berlebihan: Apa Itu dan Bagaimana Mengatasinya? </h4>
          <p class="card-text text-justify">Dear, saat kamu menghadapi sesuatu yang mengancam keselamatan, keamanan, atau kesejahteraanmu, wajar untuk memiliki perasaan cemas dan takut. </p>
        </div>
      </div>
      </div>

    </div>
  </div>
  </section>

    <section id="about" class="about">
          <div class="container">
            <div class="row mb-4">
            <div class="col text-center">

            </div>
            </div>
            <div class="row">
              <div class="col text-justify">
                <img class="about" src="{{ url('img/blog/psikolog.jpg') }}">
                </div>
              <div class="col text-justify">
                <h1 href="{{ url('blog/psikolog') }}">Putus Cinta? Coba 7 Cara Mengobati Patah <br> Hati yang Disarankan Psikolog Ini!  </h1> <br>
                <p>Putus cinta membuat dunia yang tadinya terasa begitu indah, kini bagaikan lautan hitam yang siap menelanmu. Bagaimana mengatasinya? </p>

              </div>
            </div>
          </div>
          </section>

        

@endsection