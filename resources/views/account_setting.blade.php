@extends('layouts.frontend.index')
@section('content')
<div class="banner-2"></div>
<div class="grey lighten-5">
  <div class="container">
    <div class="row" style="margin-top: -50px; margin-bottom: 0;">
      <div class="col s12 m10">
        <div class="card">
          <div class="card-content">
            <form action="{{ route('account_setting') }}" method="post">
              @csrf
              <h5 class="grey-text text-darken-3">Ganti password</h5>
              <div class="row">
                <div class="col s12 m6 no-margin">
                  <label for="name" class="black-text">Password</label>
                  <div class="input-field custom-input-field-1">
                    <input type="password" name="password" id="password" required autocomplete="off" class="grey-text text-darken-2">
                  </div>
                </div>
                <div class="col s12 m6 no-margin">
                  <label for="name" class="black-text">Konfirmasi password</label>
                  <div class="input-field custom-input-field-1">
                    <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="off" class="grey-text text-darken-2">
                  </div>
                </div>
                <div class="col s12 m6 no-margin">
                  <button class="btn z-depth-0 blue">Ganti password</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script>
  @if($errors->count() > 0)
    @foreach($errors->all() as $r)
      M.toast({html: '{{ $r }}'})
    @endforeach
  @endif
</script>

