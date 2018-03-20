@extends('content.template.app')
@section('content')
<br><br>
	<br>
<div class="container">
    <div class="row">
      <!-- /.col-lg-3 -->
        <div class="row">
    <div class="col-lg-3 col-md-3 ">
        <button type="button" class="btn btn-primary">10 Besar Vote/Like</button>
    </div>
    <div class="col-lg-3 col-md-3 ">
    </div>
    <div class="col-lg-3 col-md-3 ">
    </div>
    <div class="col-lg-3 col-md-3 ">    
    </div>
    <br>
    <br>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{url('front_end/img/cantrang.jpg')}}" width="700px" height="170px"  alt=""></a>
              <div class="card-body">
                <h4 class="card-title" align="center">
                  <a href="{{url('/polling/detail')}}" >Alat tangkap ikan ramah lingkungan sebagai solusi pengganti tangkap cantrang </a>
                </h4>
                <h5>Aziz Tarsono</h5>
                <p class="card-text">Alamat : Kelurahan Karangasem Utara<br>
                  Kec. Batang, Kab. Batang<br>
         <br><a href="">Selengkapnya</a></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="{{url('/polling/detail')}}" class="btn-sm btn btn-primary"><i class="icon-like"></i></a></small> 75 
                <small class="text-muted"><a href="{{url('/polling/detail')}}" class="btn-sm btn btn-danger"><i class="icon-eye"></i></a></small> 100 
                <small class="text-muted"><a href="{{url('/polling/detail')}}" class="btn-sm btn btn-info"><i class="icon-share"></i></a></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{url('front_end/img/cantrang1.jpg')}}" width="700px" height="170px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title" align="center">
                  <a href="#">Alat Asah Pisau Ranjang Tembakau</a>
                </h4>
                <h5>Ali Achmadi</h5>
                <p class="card-text">Alamat : Desa Bangunrejo RT.01/01<br>
        Kec. Pamotan Kab. Rembang
        <br><a href="">Selengkapnya</a></p>
        </p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="" class="btn-sm btn btn-primary"><i class="icon-like"></i></a></small> 33 
        <small class="text-muted"><a href="" class="btn-sm btn btn-danger"><i class="icon-eye"></i></a></small> 50 
        <small class="text-muted"><a href="" class="btn-sm btn btn-info"><i class="icon-share"></i></a></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{url('front_end/img/cantrang2.jpg')}}" width="700px" height="170px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Wayang Perca sebagai Solusi Alternatif Reduksi Limbah Konveksi</a>
                </h4>
                <h5>Tri Harjanto</h5>
                <p class="card-text">
        Alamat : Jl. Tegal Sari RT.01/03,<br>
        Dukuh, Delanggu Kab. Klaten
        <br><a href="">Selengkapnya</a>
        </p>
              </div>
              <div class="card-footer">
         <small class="text-muted"><a href="" class="btn-sm btn btn-primary"><i class="icon-like"></i></a></small> 31 
        <small class="text-muted"><a href="" class="btn-sm btn btn-danger"><i class="icon-eye"></i></a></small> 60 
        <small class="text-muted"><a href="" class="btn-sm btn btn-info"><i class="icon-share"></i></a></small>
      </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{url('front_end/img/cantrang.jpg')}}" width="700px" height="170px"  alt=""></a>
              <div class="card-body">
                <h4 class="card-title" align="center">
                  <a href="{{url('/polling/detail')}}" >Alat tangkap ikan ramah lingkungan sebagai solusi pengganti tangkap cantrang </a>
                </h4>
                <h5>Aziz Tarsono</h5>
                <p class="card-text">Alamat : Kelurahan Karangasem Utara<br>
                  Kec. Batang, Kab. Batang<br>
         <br><a href="">Selengkapnya</a></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="{{url('/polling/detail')}}" class="btn-sm btn btn-primary"><i class="icon-like"></i></a></small> 75 
                <small class="text-muted"><a href="{{url('/polling/detail')}}" class="btn-sm btn btn-danger"><i class="icon-eye"></i></a></small> 100 
                <small class="text-muted"><a href="{{url('/polling/detail')}}" class="btn-sm btn btn-info"><i class="icon-share"></i></a></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{url('front_end/img/cantrang1.jpg')}}" width="700px" height="170px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title" align="center">
                  <a href="#">Alat Asah Pisau Ranjang Tembakau</a>
                </h4>
                <h5>Ali Achmadi</h5>
                <p class="card-text">Alamat : Desa Bangunrejo RT.01/01<br>
        Kec. Pamotan Kab. Rembang
        <br><a href="">Selengkapnya</a></p>
        </p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="" class="btn-sm btn btn-primary"><i class="icon-like"></i></a></small> 33 
        <small class="text-muted"><a href="" class="btn-sm btn btn-danger"><i class="icon-eye"></i></a></small> 50 
        <small class="text-muted"><a href="" class="btn-sm btn btn-info"><i class="icon-share"></i></a></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{url('front_end/img/cantrang2.jpg')}}" width="700px" height="170px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Wayang Perca sebagai Solusi Alternatif Reduksi Limbah Konveksi</a>
                </h4>
                <h5>Tri Harjanto</h5>
                <p class="card-text">
        Alamat : Jl. Tegal Sari RT.01/03,<br>
        Dukuh, Delanggu Kab. Klaten
        <br><a href="">Selengkapnya</a>
        </p>
              </div>
              <div class="card-footer">
         <small class="text-muted"><a href="" class="btn-sm btn btn-primary"><i class="icon-like"></i></a></small> 31 
        <small class="text-muted"><a href="" class="btn-sm btn btn-danger"><i class="icon-eye"></i></a></small> 60 
        <small class="text-muted"><a href="" class="btn-sm btn btn-info"><i class="icon-share"></i></a></small>
      </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  @endsection