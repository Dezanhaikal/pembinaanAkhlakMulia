@extends('layouts.app')

@section('content') 
<!DOCTYPE html>
<html>
<head>
  <title>COVID-19</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="content">
  <div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card shadow-sm border-0">
        <br>
        <div class="card-body">
          <div class="content" >
        <form action="{{ route('djadwal.create') }}" method="POST">
          <span class="login100-form-title">
                   <b>Detail Jadwal</b>
          </span>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

           <div class="form-group">
 			<div  class="col s6 m6 no-margin">
 			<label><b>NIS</b></label>
            <select class="form-control" name="nis" readonly>
                  <?php foreach ($data_siswa as $siswa){?>
                  <option value="{{$siswa->nis}}"> {{$siswa->nis}}  </option>
                  <?php } ?>
                  </select>
                   <span class="focus-input100"></span>
              </div>
          </div>
           <div class="form-group">
 			<div   class="col s6 m6 no-margin">
 			<label>Nama</label>
            <select class="form-control" name="nama" readonly>
                  <?php foreach ($data_siswa as $siswa){?>
                  <option value="{{$siswa->nama}}"> {{$siswa->nama}}  </option>
                  <?php } ?>
                  </select>
                  <span class="focus-input100"></span>
              </div>
          </div>
          <div class="form-group">
          	<div  class="col s6 m6 no-margin">
          		<label>Hari</label>
          		<select class="form-control" name="hari">
          			<option value="1">Senin</option>
                <option value="2">Selasa</option>
                <option value="3">Rabu</option>
                <option value="4">Kamis</option>
                <option value="5">Jumat</option>
                <option value="6">Sabtu</option>
                <option value="7">Minggu</option>
          		</select>
              <span class="focus-input100"></span>
          	</div>
          </div>
           <div class="form-group">
 			<div  class="col s6 m6 no-margin">
 			<label>Tanggal</label>
            <select class="form-control" name="tgl" readonly>
                  <?php foreach ($data_kegiatan as $jkegiatan){?>
                  <option value="{{$jkegiatan->tgl}}"> {{$jkegiatan->tgl}}  </option>
                  <?php } ?>
                  </select>
                  <span class="focus-input100"></span>
              </div>
          </div>
           <div class="form-group">
 			<div   class="col s6 m6 no-margin" >
 			<label>Kd jadwal</label>
            <select class="form-control" name="kd_jadwal">
                  <?php foreach ($data_jadwal as $jadwal){?>
                  <option value="{{$jadwal->kd_jadwal}}"> {{$jadwal->kd_jadwal}}  </option>
                  <?php } ?>
                  </select>
                  <span class="focus-input100"></span>
              </div>
          </div>
 	        <div class="form-group">
 			<div class="col s6 m6 no-margin">
 	      	<label> Jam Mulai </label>
 		   <input type="time" name="jam_mulai" placeholder="Jam Mulai" class="form-control" id="jam_mulai">
       <span class="focus-input100"></span>
 	      </div>
 	      </div>
 	      <div class="form-group">
 			<div class="col s6 m6 no-margin">
 	      	<label> jam_akhir </label>
 		   <input type="time" name="jam_akhir" placeholder="jam_akhir"  class="form-control" id="jam_akhir">
       <span class="focus-input100"></span>
 	      </div>
 	      </div>
 	      <div class="form-group">
 			<div  class="col s6 m6 no-margin">
 	      	<label> kd_aktifitas </label>
 		   <input type="text" name="kd_aktifitas" placeholder="kd_aktifitas"  class="form-control" id="kd_aktifitas">
       <span class="focus-input100"></span>
 	      </div>
 	      </div>
 	       <div class="form-group">
 			<div  class="col s6 m6 no-margin">
 			<label>Kd jadwal</label>
            <select class="form-control" name="kd_mapel">
                  <?php foreach ($data_mapel as $jadwal){?>
                  <option value="{{$jadwal->id}}"> {{$jadwal->kd_mapel}}  </option>
                  <?php } ?>
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

<!--===============================================================================================-->  
  <script src="{{ asset ('login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset ('login/vendor/bootstrap/js/popper.js') }}"></script>
  <script src="{{ asset ('login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset ('login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset ('login/vendor/tilt/tilt.jquery.min.js') }}"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>
@endsection