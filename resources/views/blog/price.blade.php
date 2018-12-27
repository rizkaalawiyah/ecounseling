@extends('layouts.master')

@section('content')
        <!-- Jumbotron -->
        <div class="jumbotron1">
          <div class="container">
        <div class="row mb-4 ">
        <div class="card col-md bg-light mb-4 ml-3" style="max-width: 18rem;">
            <div class="card-header"><h5>Paket Perkenalan</h5> <br> <br>
            Rp. 100.000 /sesi <br><br>
            Dibayar sekaligus seharga Rp. 100.000  <br><br>

            berlaku hingga 1 Minggu setelah pembelian <br><br><br></div>
            <div class="card-body">
              <p class="card-text">
                <i class="fas fa-check-square">  1x Sesi Konseling Text</i>
                 <i class="fas fa-check-square">  1 Sesi berlaku 1 Jam</i>
              </p>
                <br>
              <a class="btn btn-primary btn-lg " href="{{ url('blog/perkenalan') }}" role="button">Pilih Paket</a>
            </div>
          </div> <br>
        <div class="card col-md bg-light mb-3 ml-3" style="max-width: 18rem;">
            <div class="card-header"><h5>Paket Lega</h5> <br><br>
            Rp. 87.500 /sesi <br><br>
            Dibayar sekaligus seharga Rp. 350.000 <br>
            (Lebih murah hingga Rp50.000) <br><br>

            berlaku hingga 1 Bulan setelah pembelian</div> 
            <div class="card-body">
              <p class="card-text">
              <i class="fas fa-check-square"> 4x Sesi Konseling Text </i>
               <i class="fas fa-check-square"> 1 Sesi berlaku 1 Jam </i>
               <i class="fas fa-check-square"> Garansi 100% Uang Kembali* </i>
              </p>
              <a class="btn btn-primary btn-lg " href="{{ url('blog/lega') }}" role="button">Pilih Paket</a>
            </div>
          </div> <br>
        <div class="card col-md bg-light mb-3 ml-3" style="max-width: 18rem;">
            <div class="card-header">
              <h5>Paket Nyaman </h5><br><br>
              Rp. 80.000 /sesi <br><br>
              Dibayar sekaligus seharga Rp. 640.000 <br> 
              (Lebih murah hingga Rp160.000) <br><br>

              berlaku hingga 2 Bulan setelah pembelian
            </div>
            <div class="card-body">
              <p class="card-text">
               <i class="fas fa-check-square"> 8x Sesi Konseling Text </i>
               <i class="fas fa-check-square"> 1 Sesi berlaku 1 Jam </i>
               <i class="fas fa-check-square"> Garansi 100% Uang Kembali* </i>
              </p>
              <a class="btn btn-primary btn-lg " href="{{ url('blog/nyaman') }}" role="button">Pilih Paket</a>
            </div>
          </div>
        <div class="card col-md bg-light mb-3 ml-3" style="max-width: 18rem;">
            <div class="card-header">
              <h5>Paket Bahagia</h5> <br><br>
              Rp. 77.000 /sesi <br><br>
              Dibayar sekaligus seharga Rp. 924.000 <br> 
              (Lebih murah hingga Rp276.000) <br><br>

              berlaku hingga 4 Bulan setelah pembelian
            </div>
            <div class="card-body">
              <p class="card-text">
                 <i class="fas fa-check-square"> 12x Sesi Konseling Text </i>
                   <i class="fas fa-check-square"> 1 Sesi berlaku 1 Jam </i>
                   <i class="fas fa-check-square"> Garansi 100% Uang Kembali* </i>
              </p>
              <a class="btn btn-primary btn-lg " href="{{ url('blog/bahagia') }}" role="button">Pilih Paket</a>
            </div>
          </div>
        </div>
          </div>
        </div>


                  <!-- about-->
        <section id="banding" class="banding pt-5 pb-4">
          <div class="container">
            <div class="row mb-4">
            <div class="col text-center">
 
            </div>      
            </div>
            <div class="row">
              <div class="col-6 pt-5">
                <h1>Lebih Terjangkau dan Terpercaya</h1> <br>
                <p>Sebagai perbandingan, konseling tatap muka berkisar antara Rp250.000 hingga Rp500.000 per sesi (1 jam). Riliv menyediakan layanan yang jauh lebih terjangkau dengan solusi yang terpercaya.</p>
                </div>
              <div class="col-6 text-justify">
                <img class="banding" src="{{ url('img/price/pricing-section-3-murah.png') }}">
                              
              </div>
            </div>
          </div>
          </section>

          <!-- Garansi-->
          <section id="garansi" class="garansi pt-5 pb-4">
          <div class="container">
            <div class="row mb-4">
            <div class="col text-center">
              <h3>Garansi Kami Melindungi Anda Dari</h3>
            </div>      
            </div>
            <div class="row">
              <div class="col-6 pt-5">
                <div class="card mb-3">
                  <div class="row">
                    <div class="col-3">
                  <img class="garansi" src="{{ url('img/price/depresi-section-4-trauma.png') }}" >
                  </div>
                  <div class="col-9">
                  <div class="card-body">
                    <h5 class="card-title">Slow Response</h5>
                    <p class="card-text">Psikolog anda tidak menjawab 1x24 jam pada jadwal konseling.</p>
                  </div>
                  </div>
                </div>
                </div>
                </div>
              <div class="col-6 pt-5">
                <div class="card mb-3">
                  <div class="row">
                    <div class="col-3">
                  <img class="garansi" src="{{ url('img/price/depresi-section-4-psikis.png') }}" >
                  </div>
                  <div class="col-9">
                  <div class="card-body">
                    <h5 class="card-title">Sistem Error</h5>
                    <p class="card-text">Terdapat kendala dalam mengakses layanan aplikasi disebabkan karena faktor internal sistem.</p>
                  </div>
                  </div>
                </div>
                </div>
                </div>
            </div>
          </div>
          </section>
@endsection