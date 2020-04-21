<!DOCTYPE html>
<html lang="en">
@section('htmlheader_title')
	eLitbang | Login
@endsection
@include('homepage::layouts.partials.htmlheader')
  <body>
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
  </body>
  </html>
