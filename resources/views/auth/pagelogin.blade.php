<!DOCTYPE html>
<html lang="en">
@section('htmlheader_title')
	Inpirasi Sida | Login
@endsection
@include('homepage::layouts.partials.htmlheader')
  <body>
  @include('sweetalert::alert')
  <div class="counters section bg-defult">
  <!--- Alert Modal -->
  @if ($errors->any())      
    <div class="modal fade" id="alert-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #f65656;">
          <font class="modal-title" id="exampleModalLongTitle" style="color: #ffffff; font-size: 30px; font-family: Arial Black;">Oops, Error Register</font>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <center>
            <img src="{{asset('img/icon/danger-alert.svg')}}" width="200" height="200">
          </center>
            <ul>
              @foreach ($errors->all() as $error)
                  <li><font style="font-size: 18px;font-family: Comic Sans MS;">{{ $error }}</font></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endif
    <!--- End Alert Modal -->

      <div class="container">
        <div class="row justify-content-left">
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="subscribe-form">
              <div class="form-wrapper">
                <br><br>
                <div class="sub-title text-center">
                  <h3>Login</h3>
                  <p>&nbsp;</p>
                </div>
                <form method="POST" action="{{ route('prosesLogin') }}">
                @csrf
                  <div class="row">
                    <div class="col-12 form-line">
                      <div class="form-group">
                        <input type="text" class="form-control" name="email" required placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        <input type="password" class="form-control" name="password" required placeholder="Password">
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
                        <input id="captcha" type="text" class="form-control" required placeholder="Enter Captcha" name="captcha">     
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-submit">
                        <button type="submit" class="btn btn-common btn-effect" name="login">Login</button>
                      </div>
                      <br><br>
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
    $('#alert-modal').modal('show');
        $('#refresh').click(function(){
          $.ajax({
            type:'GET',
            url:'{{url("login/refreshcaptcha")}}',
            success:function(data){
            console.log("succes");
                $(".captcha span").html(data.captcha);
            }
          });
        });
    </script>
  </body>
  </html>
