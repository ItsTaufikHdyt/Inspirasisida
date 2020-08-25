@extends('admin::layouts.app')

@section('htmlheader_title')
    Inspirasi Sida | Admin
@endsection
@section('main-content')
<h4>List User</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="sparkline13-graph">
	        <div class="datatable-dashv1-list custom-datatable-overright">
            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
	                <thead>
	                    <tr>
	                        <th data-field="id">No.</th>
	                        <th data-field="name">Nama</th>
	                        <th data-field="email" width="30%">Status</th>
	                    </tr>
	                </thead>
	                <tbody>
					@php
						$no = 1;
					@endphp
						@foreach($user as $data)
	                    <tr>
	                    			<td>{{$no++}}</td>
	                    			<td>{{$data->nama}}</td>
	                    			<td>
                                    <input data-id="{{$data->id}}" class="toggle-class" type="checkbox" 
                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle" 
                                    data-on="Active" data-off="InActive" {{ $data->email_verified ? 'checked' : '' }}>
                                    </td>
	                    		</tr>
	                    @endforeach
	                </tbody>
	            </table>
	        </div>
	    </div>
    </div>
</div>
@endsection
@section('custom_scripts')
<script type="text/javascript">

$(function() {

  $('.toggle-class').change(function() {

      var status = $(this).prop('checked') == true ? 1 : 0; 

      var user_id = $(this).data('id'); 

       

      $.ajax({

          type: "GET",

          dataType: "json",

          url: '/changeStatus',

          data: {'status': status, 'user_id': user_id},

          success: function(data){

            console.log(data.success)

          }

      });

  })

})

</script>
@endsection