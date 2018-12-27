<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/price.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'/>

    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <title>E-Counseling - Konseling Online</title>
    <style type="text/css">

      .jumbotron{
        background-image: url("{{ url('img/home-hero.png') }}");
      }
       .jumbotron1{
        background-image: url("{{ url('img/price/tew2.jpg') }}");
      }
      .jumbotron2{
        background-image: url("{{ url('img/price/tew2.jpg') }}");
      }

    </style>
  </head>
  <body id="app">
  	       <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand" href="{{ url('blog/home') }}"><img class="logo" src="{{ url('img/logo.png') }}"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="{{ url('blog/about') }}">About Us</a>
          <a class="nav-item nav-link" href="{{ url('blog/price') }}">Price</a>
          <a class="nav-item nav-link " href="{{ url('blog/post') }}">Blog</a>
          <a class="nav-item nav-link " href="{{ url('blog/faq') }}">FAQ</a>
        </div>
        </div>
        </div>
      </nav>

      

	@yield('content')

                    <!-- Contact -->
        <section id="contact" class="contact pt-5 pb-4">
          <div class="container">
            <div class="row mb-4">
            <div class="col text-center">

            </div>
            </div>
            <div class="row contact">
              <div class="col-4">
                <h6>Tentang Kami</h6> <br>
                <a href="#">Blog</a> <br>
                <a href="#">Profil</a> <br>
                <a href="#">Karir</a> <br>
                <a href="#">Kontak</a> <br>
                <a href="#">Bergabung Sebagai Konselor</a> <br>
              </div>

              <div class="col-4">

                <h6>Lainnya</h6> <br>
                <a href="#">Terapi Online</a> <br>
                <a href="#">Harga</a> <br>
                <a href="#">Kebijakan Privasi</a> <br>
                <a href="#">Ketentuan Penggunaan</a> <br>
                <a href="#">FAQ</a> <br>
              </div>

              <div class="col-4">
                  <h6>Follow Kami di:</h6> <br>
                  <a href="#"><i class="fab fa-instagram"></i>  Instagram</a> <br>
                  <a href="#"><i class="fab fa-facebook"></i>  Facebook</a> <br>
                  <a href="#"><i class="fab fa-twitter-square"></i>  Twitter</a> <br>
                  <a href="#"><i class="fab fa-google-plus-square"></i> Google+</a> <br>
                  <a href="#"><i class="fab fa-line"></i> Line</a> <br>
              </div>
            </div>
          </div>
          </section>

            <!-- footer -->
    <footer class=" bg-dark text-white pt-2 pb-2">
      <div class="container">
        <div class="row text-center pc-3">
          <div class="col">
            <p>Jika Anda memiliki masalah mendesak atau mengancam hidup Anda, jangan gunakan situs ini, silahkan kontak nomor 119</p>
          </div>

        </div>
      </div>

    </footer>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
