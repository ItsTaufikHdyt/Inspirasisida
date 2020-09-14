<!DOCTYPE html>
<html lang="en">
@section('htmlheader_title')
Inpirasi Sida | Register
@endsection
@include('homepage::layouts.partials.htmlheader')
  <body>
  @include('sweetalert::alert')
  <!-- Subcribe Section Start -->
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
                        <input type="text" class="form-control" name="nama" style="text-transform: capitalize;" required >
                      </div>
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        Email
                        <input type="text" class="form-control" name="email" required >
                      </div>
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        Password
                        <input id="pwd" type="password" class="form-control" name="password" required >
                        <div id="progressBar">
                          <div id="progress-bar"></div>
                        </div>
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
      //Password Cek
      jQuery.strength = function( element, password ) {
              var desc = [{'width':'0px'}, {'width':'20%'}, {'width':'40%'}, {'width':'60%'}, {'width':'80%'}, {'width':'100%'}];
              var descClass = ['', 'progress-bar-danger', 'progress-bar-danger', 'progress-bar-warning', 'progress-bar-success', 'progress-bar-success'];
              var score = 0;

              if(password.length > 6){
                  element.removeClass();
                  score++;                  
              }

              if ((password.match(/[a-z]/)) && (password.match(/[A-Z]/))){
                element.removeClass();
                  score++;
              }

              if(password.match(/\d+/)){
                element.removeClass();
                  score++;
              }

              if(password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)){
                element.removeClass();
                  score++;
              }

              if (password.length > 10){
                element.removeClass();
                  score++;
              }

              element.removeClass( descClass[score-1] ).addClass( descClass[score] ).css( desc[score] );
          };

      jQuery(function() {
        jQuery("#pwd").keyup(function() {
                          jQuery.strength(jQuery("#progress-bar"), jQuery(this).val());
                      });
      });
    </script>
  </body>
  </html>