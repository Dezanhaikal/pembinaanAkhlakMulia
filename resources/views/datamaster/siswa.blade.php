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
        <form action="{{ route('siswa.create') }}" method="POST">
          <span class="login100-form-title">
                   Data Siswa
          </span>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
 	  <div class="form-group">
      <label><b>NIS</b></label>
 			<div class="wrap-input100 validate-input">
 		   <input type="text" name="nis" placeholder="NIS" class="input100" id="nis">
       <span class="focus-input100"></span>
 	    </div>
 	  </div>
 	    <div class="form-group">
        <label><b>Nama</b></label>
      <div class="wrap-input100 validate-input">
       <input type="text" name="nama" placeholder="nama" class="input100" id="nama">
       <span class="focus-input100"></span>
        </div>
        </div>
         <div class="form-group">
          <label><b>Rombel</b></label>
      <div class="wrap-input100 validate-input">
       <select name="rombel" class="input100" id="rombel">
         <option value="rplxi1">RPL XI-1</option>
         <option value="rplxi2">RPL XI-2</option>
         <option value="rplxi3">RPL XI-3</option>
         <option value="rplxi4">RPL XI-4</option>
       </select>
       <span class="focus-input100"></span>
        </div>
        </div>
         <div class="form-group">
          <label><b>Rayon</b></label>
      <div class="wrap-input100 validate-input">
       <select name="rayon" class="input100" id="rayon">
         <option value="cis1">Cisarua 1</option>
         <option value="cis2">Cisarua 2</option>
         <option value="cis33">Cisarua 3</option>
         <option value="cis4">Cisarua 4</option>
         <option value="cis5">Cisarua 5</option>
         <option value="cis6">Cisarua 6</option>
       </select>
       <span class="focus-input100"></span>
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
</div>
</div>
 </div>
</body>
</html>
@endsection