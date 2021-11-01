@extends('admin::layouts.app')

@section('htmlheader_title')
Inspirasi Sida | Admin
@endsection
@section('main-content')
<!--- Alert Modal -->
@if ($errors->any())
<div class="modal fade" id="poster" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
					<li>
						<font style="font-size: 18px;font-family: Comic Sans MS;">{{ $error }}</font>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endif
<!--- End Alert Modal -->
<h4>List User</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="sparkline13-graph">
			<div class="datatable-dashv1-list custom-datatable-overright">
				<table id="user" class="table table-bordered table-hover table-responsive">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Email</th>
							<th>Level</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
				<div class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog" id="user_modal">
					<div class="modal-dialog">
						<form id="companydata">
							<div class="modal-content">
								<input type="hidden" id="user_id" name="user_id" value="">
								<div class="modal-close-area modal-close-df">
									<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
								</div>
								<div class="modal-body">
									<input type="text" id="username_" name="username" class="form-control" placeholder="Username"></input>
									<br>
									<select id="email_verified" name="email_verified" class="form-control" id="">
										<option value="0">Tidak Aktif</option>
										<option value="1">Aktif</option>
									</select>
									<br>
									<input type="checkbox" name="centang" onclick="var input = document.getElementById('pass'); if( this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}"> Ganti Password<br>
									<input type="password" name="password" id="pass" class="form-control" disabled="true" required>
								</div>

								<div class="modal-footer">
									<input type="submit" value="Submit" id="submit-edit" class="btn btn-custon-four btn-primary btn-md">
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
@section('custom_scripts')

<script type="text/javascript">
	$('#alert-modal').modal('show');
	//--------------Fungsi Yajra DataTables------------
	$(function() {
		var table = $('#user').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('admin.getuser') }}",
			columns: [{
					data: 'DT_RowIndex',
					name: 'DT_RowIndex',
					orderable: false,
					searchable: false
				},
				{
					data: 'nama',
					name: 'nama',
				},
				{
					data: 'username',
					name: 'username',
				},
				{
					data: 'email',
					name: 'email',
				},
				{
					data: 'level',
					name: 'level',
				},
				{
					data: 'status',
					name: 'status',
					orderable: false,
					searchable: false
				},
				{
					data: 'action',
					name: 'action',
					orderable: false,
					searchable: false
				},
			],
		});

	});
	$(document).ready(function() {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('body').on('click', '#editUser', function(event) {

			event.preventDefault();
			var id = $(this).data('id');
			console.log(id)
			$.get('{{url("admin/edit-user")}}' + '/' + id, function(data) {
				console.log(data);
				$('#userCrudModal').html("Edit User");
				$('#submit-edit').val("Edit User");
				$('#user_modal').modal('show');
				$('#email_verified').val(data.data.email_verified);
				$('#username_').val(data.data.username);
				$('#user_id').val(data.data.id);
			})
		});


		$('body').on('click', '#submit-edit', function(event) {
			event.preventDefault()
			var id = $("#user_id").val();
			var username = $("#username_").val();
			var email_verified = $("#email_verified").val();
			console.log(email_verified);
			var pass = $("#pass").val();
			var token = '{{ csrf_token() }}';

			$.ajax({
				url: '{{url("admin/activated")}}' + '/' + id,
				type: "PUT",
				data: {
					id: id,
					username: username,
					email_verified: email_verified,
					password: pass,
					'_token': token
				},
				dataType: 'json',
				success: function(data) {

					$('#userdata').trigger("reset");
					$('#user_modal').modal('hide');
					window.location.reload(true);
				}
			});
		});
	});
	//--------------Fungsi Delete ------------

	function deleteItem(e) {

let id = e.getAttribute('data-id');
let token = '{{ csrf_token() }}';

Swal.fire({
	title: 'Are you sure?',
	text: "You won't be able to revert this!",
	icon: 'warning',
	showCancelButton: true,
	confirmButtonText: 'Yes, delete it!',
	cancelButtonText: 'No, cancel!',
	reverseButtons: true
}).then((result) => {
	if (result.value) {
		if (result.isConfirmed) {

			$.ajax({
				type: "DELETE",
				url: '{{ url("admin/delete-user")}}' + '/' + id,
				data: {
					id: id,
					'_token': token
				},
				success: function(data) {
					if (data.success) {
						Swal.fire(
							'Deleted!',
							'Your file has been deleted.',
							"success"
						);
						$("#" + id + "").remove();
						window.location.reload(true); // you can add name div to remove
					}

				}
			});

		}

	} else if (
		result.dismiss === Swal.DismissReason.cancel
	) {
		Swal.fire(
			'Cancelled',
			'Your imaginary file is safe :)',
			'error'
		);
	}
});

}
</script>
@endsection