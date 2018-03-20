@extends('content.template.app')
@include('content.template.slider')
@section('content')
<div class="container">

        <div class="row">
  
          <!-- Post Content Column -->
          <div class="col-lg-12">
  
            <!-- Title -->
            <h1 class="mt-4">Direktori Inovasi</h1>
  
            <!-- Author -->
            
  
            <hr>
            <div class="row">
                  <div class="col-3">
                  <div class="form-group">
      <select class="form-control" id="bidang">
          <option>Jawa Tengah</option>
        <option>Kabupaten Banjarnegara</option>
        <option>Kabupaten Banyumas</option>
        <option>Kabupaten Batang</option>
        <option>Kabupaten Blora</option>
        <option>Kabupaten Boyolali</option>
        <option>Kabupaten Brebes</option>
        <option>Kabupaten Cilacap</option>
        <option>Kabupaten Demak</option>
        <option>Kabupaten Grobogan</option>
        
        <option>Kabupaten Jepara</option>
        <option>Kabupaten Karanganyar</option>
        <option>Kabupaten Kebumen</option>
        <option>Kabupaten Kendal</option>
        <option>Kabupaten Klaten</option>
        <option>Kabupaten Kudus</option>
        <option>Kabupaten Magelang</option>
        <option>Kabupaten Pati</option>
        <option>Kabupaten Pekalongan</option>
        
        <option>Kabupaten Pemalang</option>
        <option>Kabupaten Purbalingga</option>
        <option>Kabupaten Purworejo</option>
        <option>Kabupaten Rembang</option>
        <option>Kabupaten Semarang</option>
        <option>Kabupaten Sragen</option>
        <option>Kabupaten Sukoharjo</option>
        <option>Kabupaten Tegal</option>
        <option>Kabupaten Temanggung</option>
        
        <option>Kabupaten Wonogiri</option>
        <option>Kabupaten Wonosobo</option>
        <option>Kota Magelang</option>
        <option>Kota Pekalongan</option>
        <option>Kota Salatiga</option>
        <option>Kota Semarang</option>
        <option>	Kota Surakarta</option>
        <option>Kota Tegal</option>
      </select>
    </div>
    
                  </div>
                  <div class="col-3">
                  
                      <select class="form-control" id="bidang">
                          <option>Semua</option>
                        <option>Agribisnis dan Pangan</option>
                        <option>Energi</option>
                        <option>Kehutanan dan Lingkungan Hidup</option>
                        <option>Kelautan dan Perikanan</option>
                        <option>Kesehatan, Obat-obatan dan Kosmetika</option>
                        <option>Pendidikan</option>
                        <option>Rekayasa Teknologi dan Manufaktur</option>
                        <option>Kerajinan dan Industri Rumah Tangga</option>
                        <option>Sosial</option>
                      </select>
                  </div>
                  <div class="col-3">
                      <input type="text" class="form-control" id="judul" placeholder="Judul Proposal">
                  </div>
                  <div class="col-3">
                      <button type="button" class="btn btn-primary">Cari</button> 
                  </div>
              </div>
              <img  src="{{url('front_end/img/peta.jpeg')}}" alt="peta" style="width: 1100px; height: 600px;">
              
            
            
  
            
            <hr>
  
            <!-- Blog Post -->
            
            
            
  
            <!-- Single Comment -->
         
  
            <!-- Comment with nested comments -->
            
  
          </div>
  
          
  
        </div>
        <!-- /.row -->
  
      </div>
  @endsection