@extends('layouts.app')

@section('content') 
<!DOCTYPE html>
<html>
<head>
  <title>Login V1</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{{ asset ('login/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset ('login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset ('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset ('login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{ asset ('login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset ('login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset ('login/css/util.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('login/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="{{ asset ('login/images/img-01.png') }}" alt="IMG">
        </div>
        <form action="{{ route('pembuktian.create') }}" method="POST">
          <span class="login100-form-title">
                  Pembuktian
          </span>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
 			<div class="form-group">
        <label><b>Kode Jadwal</b></label>
      <div class="wrap-input100 validate-input">
       <input type="text" name="kd_jadwal" placeholder="Kode Jadwal" class="input100" id="kd_jadwal">
       <span class="focus-input100"></span>
      </div>
      </div>
 	    <div class="form-group">
        <label><b>Kode Aktifitas</b></label>
      <div class="wrap-input100 validate-input">
       <input type="text" name="kd_aktifitas" placeholder="Kode Aktifitas" class="input100" id="kd_aktifitas">
       <span class="focus-input100"></span>
      </div>
    </div>
 	    <div class="form-group">
        <label><b>Bukti 1</b></label>
 			<div class="wrap-input100 validate-inputn">
             <div class="custom-file">
               <input type="file" class="custom-file-input input100"  name="bukti1">
               <label class="custom-file-label input100" for="customFile">
                 Choose file
              </label>
           </div>
        </div>
    </div>
     <<div class="form-group">
      <label><b>Bukti 2</b></label>
      <div class="wrap-input100 validate-inputn">
             <div class="custom-file">
               <input type="file" class="custom-file-input input100"  name="bukti2">
               <label class="custom-file-label input100" for="customFile">
                 Choose file
              </label>
           </div>
        </div>
    </div>
             <div class="container-login100-form-btn float-right">
            <button  class="btn btn-primary float-right">
              Save
            </button>
          </div>
        <div class="text-center p-t-136">
            <a class="txt2" href="#">
              By DezaniHaikal
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
 	  </div>
 	</div>
 </div>
</body>
</html>
@endsection