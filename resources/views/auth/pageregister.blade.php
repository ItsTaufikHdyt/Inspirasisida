<!DOCTYPE html>
<html lang="en">
@section('htmlheader_title')
	eLitbang | Register
@endsection
@include('homepage::layouts.partials.htmlheader')
  <body>
  <!-- Subcribe Section Start -->
  @if ($errors->any())
      <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
@endif
@if(session()->has('message'))
      <div class="alert alert-success">
          <li>{{ session('message') }}</li>
      </div>
@endif
    <div class="counters section bg-defult">
      <div class="container">
        <div class="row justify-content-left">
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="subscribe-form">
              <div class="form-wrapper">
                <br><br>
                <div class="sub-title text-center">
                  <h3>Form Register</h3>
                  <p>&nbsp;</p>
                </div>

                <form method="POST" action="{{ route('prosesRegister') }}">
                @csrf
                  <div class="row">
                    <div class="col-12 form-line">
                      <div class="form-group">
                        Nama Lengkap
                        <input type="text" class="form-control" name="nama" style="text-transform: capitalize;" required placeholder=" Nama Lengkap">
                      </div>
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        Email
                        <input type="text" class="form-control" name="email" required placeholder=" Email">
                      </div>
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        Password
                        <input type="password" class="form-control" name="password" required placeholder=" Password">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                      <div class="captcha">
                        <span>{!! captcha_img('math') !!}</span>
                        <button type="button" class="btn btn-common btn-effect" id="refresh">
                          <i class="fa fa-sync-alt" id="refresh"></i>
                        </button>
                      </div>
                      <div>
                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">     
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-submit">
                        <button type="submit" class="btn btn-common btn-effect" name="signup">Register</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Subcribe Section End -->
    @include('homepage::layouts.partials.scripts')
    <script type="text/javascript">
        $('#refresh').click(function(){
          $.ajax({
            type:'GET',
            url:'{{url("register/refreshcaptcha")}}',
            success:function(data){
            console.log("succes");
                $(".captcha span").html(data.captcha);
            }
          });
        });
    </script>
  </body>
  </html>