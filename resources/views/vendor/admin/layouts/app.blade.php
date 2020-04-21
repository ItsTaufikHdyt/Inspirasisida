<!DOCTYPE html>
<html>
  @section('htmlheader')
    @include('admin::layouts.partials.htmlheader')
@show
    <body>
    @include('admin::layouts.partials.sidebar')
        @include('admin::layouts.partials.mainheader')
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <section id="index">
                                @yield('main-content')
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
      
    @include('admin::layouts.partials.footer')

@section('scripts')
    @include('admin::layouts.partials.scripts')
@show
    </body>
</html>