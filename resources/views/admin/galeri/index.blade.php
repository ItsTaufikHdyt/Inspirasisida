@extends('admin::layouts.app')

@section('htmlheader_title')
Inspirasi Sida | Admin
@endsection
@section('main-content')
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
<h4>Galeri</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="sparkline13-graph">
			<div class="datatable-dashv1-list custom-datatable-overright">
				<div id="toolbar">
					<button type="button" class="btn btn-custon-four btn-primary" data-toggle="modal" data-target="#PrimaryModalalert">
						<i class="fa fa-plus-circle"></i> Input Data
					</button>
					<div id="PrimaryModalalert" class="modal modal-xl  fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<form action="{{url('admin/store-galeri')}}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="modal-close-area modal-close-df">
										<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
									</div>
									<div class="modal-body">
										<table width="100%">
											<tr>
												<td>kategori</td>
											</tr>
											<tr>
												<td>
													<select name="kategori" class="form-control" id="">
														<option value="0">Foto</option>
														<option value="1">Poster</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Upload File</td>
											</tr>
											<tr>
												<td>
													<div class="file-upload-inner ts-forms">
														<div class="input prepend-small-btn">
															<div class="file-button">
																Browse
																<input type="file" name="foto" required onchange="document.getElementById('prepend-small-btn2').value = this.value;">
															</div>
															<input type="text" name="file" id="prepend-small-btn2" placeholder="no file selected" required>
														</div>
													</div>
												</td>
											</tr>
										</table>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
										<button type="submit" name="simpan" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-save"></i> Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<table id="galeri" class="table table-bordered table-hover table-responsive">
					<thead>
						<tr>
							<th>No.</th>
							<th>Foto</th>
							<th>Kategori</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
				<div class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog" id="opd_modal">
					<div class="modal-dialog">
						<form id="companydata">
							<div class="modal-content">
								<input type="hidden" id="opd_id" name="opd_id" value="">
								<div class="modal-close-area modal-close-df">
									<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
								</div>
								<div class="modal-body">
									<input type="text" name="name" id="name" value="" class="form-control">
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
		var table = $('#galeri').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('admin.getGaleri') }}",
			columns: [{
					data: 'DT_RowIndex',
					name: 'DT_RowIndex',
					orderable: false,
					searchable: false
				},
				{
					data: 'foto',
					name: 'foto',
				},
				{
					data: 'kategori',
					name: 'kategori',
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

	//--------------Fungsi Edit & Update ------------
	$(document).ready(function() {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('body').on('click', '#editOpd', function(event) {

			event.preventDefault();
			var id = $(this).data('id');
			console.log(id)
			$.get('{{url("admin/edit-data-opd")}}' + '/' + id, function(data) {
				console.log(data);
				$('#userCrudModal').html("Edit category");
				$('#submit-edit').val("Edit category");
				$('#opd_modal').modal('show');
				$('#opd_id').val(data.data.id);
				$('#name').val(data.data.nama_uk);
			})
		});


		$('body').on('click', '#submit-edit', function(event) {
			event.preventDefault()
			var id = $("#opd_id").val();
			var nama_uk = $("#name").val();
			var token = '{{ csrf_token() }}';

			$.ajax({
				url: '{{url("admin/update-data-opd")}}' + '/' + id,
				type: "PUT",
				data: {
					id: id,
					nama_uk: nama_uk,
					'_token': token
				},
				dataType: 'json',
				success: function(data) {

					$('#opddata').trigger("reset");
					$('#opd_modal').modal('hide');
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
						url: '{{ url("admin/delete-galeri")}}' + '/' + id,
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