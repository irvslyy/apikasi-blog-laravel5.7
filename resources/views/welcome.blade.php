@extends('layouts.navbar')

@section('content')
<section class="sec-head mt-5 colors">
    <div class="container-fluid mt-5 justify-content-center">
        <div class="row mt-5 justify-content-center txt">
            <div class="col-md-5">
                <h1 class="display-4 txt-one">Web Developer & Designer</h1>
                <p class="textone">Seorang pemuda yang bergelut di dunia sejak kecil,yang menyukai Dunia IT & Dunia Design</p>

            <a href="/" class="btn btn-primary button1">see</a>
            </div>
            <div class="col-md-5">
                <img src="{{asset('img/disk.png') }}" width="450px" class="images">
            </div>
        </div>
    </div>
</section>

<section class="sec-two">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <i class="fas fa-user users"></i>
                <h1 class="dev-text">IRVS LYY</h1>  
                <p class="texttwo"> The Profile </p>
            </div>

            <div class="col-md-5">
                <p class="textthree"> Rully Irvandi, lahir Depok pada tanggal 23 Maret 2002.bersekolah di SMK TARUNA BHAKTI DEPOK, Anak ke-1 dari 4 bersaudara,menyukai komputer sejak duduk di bangku kelas 4 sd.Mulai Belajar Programming dari kelas 7 smp dimulai dari membuat web sederhana yang statis dan hingga sekarang membuat web kompleks yang dinamis.juga menekuni duni Cyber Security & dunia Design dari 1 smk.</p>
            </div>
        </div>
    </div>
</section>

<section class="sec-three">
    <div class="container-fluid">

        <div class="row justify-content-center text-center">
            
            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h2>LP3I Web Design</h2>
                                <p>Mengikuti Lomba Design Web di LP3I pada tahun 2018 .Membuat Design website statis sekolah dengan html,css,javascript. Lolos menjadi pemenang Juara 1 di LP3I design web.</p>
                                <a href="/" class="btn btn-primary button1">Readmore</a>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="col-md-5"><br>
                        
                        <div class="card">
                            <div class="card-body">
                                <h2>Atikan Jabar 2018</h2>
                                <p>mengikuti Atikan Jabar pada tanggal 27 Agustus - 12 Desember 2018.Lomba membuat sebuah website dinamis sekolah. gugur pada tanggal 12 Desember 2019 sebagai 10 besar se-Jawa Barat</p>
                                <a href="/" class="btn btn-primary button1">Readmore</a>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-5">
                        
                        <div class="card">
                            <div class="card-body">
                                <h2>Permata Youth preuner </h2>
                                <p>mengikuti Permata Youth Preneur pada tanggal 25 febuari - 30 april 2019.membuat sebuah website dinamis tentang Money Management & Dropshipper. gugur pada tanggal 1 april 2019 sebagai 20 besar se-indonesia</p>
                                <a href="/" class="btn btn-primary button1">Readmore</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="col-md-4"><br>
                <i class="fas fa-trophy"></i>
                <h1 class="dev-text">Achievment</h1>    
                <p class="texttwo"> The Profile </p>
            </div>

        </div>
        
    </div>
</section>

<section class="sec-two">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <i class="fas fa-user users"></i>
                <h1 class="dev-text">Contact</h1>   
                <p class="texttwo"> hire me. </p>
            </div>

            <div class="col-md-6">
                <div class="card card-contact">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user "></i>  </span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Nama" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                  <a href="/" class="btn btn-primary button1">Readmore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    function wheel(event) {
      var delta = 0;
      if (event.wheelDelta) {(delta = event.wheelDelta / 120);}
      else if (event.detail) {(delta = -event.detail / 1);}

      handle(delta);
      if (event.preventDefault) {(event.preventDefault());}
      event.returnValue = false;
  }

  function handle(delta) {
      var time = 2500;
      var distance = 700;

      $('html, body').stop().animate({
          scrollTop: $(window).scrollTop() - (distance * delta)
      }, time );
  }

  if (window.addEventListener) {window.addEventListener('DOMMouseScroll', wheel, false);}
    window.onmousewheel = document.onmousewheel = wheel;
</script>

@endsection
