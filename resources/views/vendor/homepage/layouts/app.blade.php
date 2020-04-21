<!DOCTYPE html>
<html>
  @section('htmlheader')
    @include('homepage::layouts.partials.htmlheader')
@show
    <body>
        @include('homepage::layouts.partials.mainheader')
       
            @yield('main-content')
      
    @include('homepage::layouts.partials.footer')

@include('homepage::layouts.partials.loader')
@section('scripts')
    @include('homepage::layouts.partials.scripts')
@show
    </body>
</html>