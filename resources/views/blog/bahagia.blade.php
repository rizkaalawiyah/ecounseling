@extends('layouts.master')

@section('content')
                    <!-- Cara konfirmasi-->
        <section id="konfirmasi" class=" jumbotron1 konfirmasi pt-5 pb-4 mt-5">
          <div class="container">
            <div class="row mb-4">
            <div class="col text-center">

            </div>
            </div>
            <div class="row">
              <div class="col-1 text-justify">
              	  <div class="row pt-1">
                  <img src="https://image.flaticon.com/icons/svg/438/438067.svg" width="80">
                </div>
                <div class="row pt-1">
                  <img src="https://image.flaticon.com/icons/svg/438/438072.svg" width="80">
                </div>
                <div class="row pt-1">
                  <img src="https://image.flaticon.com/icons/svg/438/438029.svg" width="80">
                </div>
                <div class="row pt-1">
                  <img src="https://image.flaticon.com/icons/svg/321/321817.svg" width="80">
                </div>

              </div>
              <div class="col-4 text-justify" style="color: black; font-weight: 300; ">
                <div class="row pt-5">
                  <h6>1. Transfer Pembayaran</h6>
                  <p>Lakukan transfer pembayaran sesuai dengan nominal yang dipilih</p>
                </div>
                <div class="row pt-5">
                  <h6>2. Simpan Bukti Pembayaran</h6>
                  <p>Scan atau foto bukti pembayaran yang telah Anda lakukan</p>
                </div>
                <div class="row pt-5">
                  <h6>3. Upload Bukti Pembayaran</h6>
                  <p>Mengisi dan upload scan/foto bukti transfer bank di halaman form konfirmasi pembayaran</p>
                </div>
                 <div class="row pt-5">
                  <h6>4. Anda Akan Menerima Pesan Dari Psikolog</h6>
                  <p>Mengenai jadwal dan prosedur konseling dengan Expert konselor dalam waktu paling lambat 1x24 jam</p>
                </div>

              </div>
              <div class="col mt-5 konfirmasi">
            <div class="card ">

                    <form action="{{ route('blog.upload') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        <div class="form-group {{ !$errors->has('title') ?: 'has-error' }}">
                               <div class="card-header ">
                                 <h4> Ditagihkan Kepada Anda </h4>
                                </div>
                            <span class="help-block text-danger">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                          <div class="card-body">                                        
                          
                          @if(session()->has('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                              </div>
                          @endif

                            <h5 class="card-title pb-3">Paket Bahagia</h5>
                            <h6 class="card-title pb-3">TOTAL Rp350.000</h6>
                            <p class="card-text pb-3">Anda akan dikenakan biaya Rp350.000 untuk 4x sesi konseling dalam waktu 1 bulan dengan garansi uang kembali (syarat dan ketentuan berlaku).</p>
                             <p>Silahkan transfer ke No. Rekening Berikut:</p>
                            <div class="card mb-2" style="width: 25rem;">
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><i>Rizka Alawiyah</i></li>
                                  <li class="list-group-item"><i>5220304312</i></li>
                                </ul>
                              </div>
                            <input type="file" name="file">
                            <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                          </div>
                          <div class="pl-3">
                                        <i>Setelah melakukan transfer pembayaran jangan lupa untuk mengirim bukti screenshot pembayaran melalui tombol di
                                            bawah ini</i>
                            </div>
                        </div>

                        <div class="form-actions pl-3 pb-3">
                            <button type="submit" class="btn btn-primary">KONFIRMASI PEMBAYARAN</button>
                        </div>
                    </form>
            </div>
            </div>
            </div>



          </div>
          </section>

@endsection