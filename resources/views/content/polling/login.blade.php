@extends('content.template.app')
@section('content')
<div class="container">
    <div class="card card-login mx-auto mt-5" style=" margin:100px;">
      <div class="card-header">Vote</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap </label>
            <input class="form-control" id="Nama" type="text" aria-describedby="Nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input class="form-control" id="exampleInputPassword1" type="email" placeholder="email">
          </div>
          
          <a class="btn btn-primary btn-block" href="#">Vote</a>
        </form>
        
      </div>
    </div>
  </div>
  @endsection
