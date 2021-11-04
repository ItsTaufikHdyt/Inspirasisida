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
<h4>List Pengumuman</h4>
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
								<form action="{{url('admin/storeProsedur')}}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="modal-close-area modal-close-df">
										<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
									</div>
									<div class="modal-body">
										<table width="100%">
											<tr>
												<td>Judul Pengumuman</td>
											</tr>
											<tr>
												<td><input type="text" name="judul_prosedur" class="form-control" placeholder="Judul pengumuman..." required></td>
											</tr>
											<tr>
												<td>Narasi</td>
											</tr>
											<tr>
												<td>
													<!-- <div id="summernote2" name="narasi">
                                				</div> -->
													<textarea id="konten" class="form-control" name="narasi" cols="60" rows="10" placeholder="Narasi pengumuman..." required></textarea>
												</td>
											</tr>
											<tr>
												<td>Upload Foto</td>
											</tr>
											<tr>
												<td>
													<div class="file-upload-inner ts-forms">
														<div class="input prepend-small-btn">
															<div class="file-button">
																Browse
																<input type="file" name="foto" required onchange="document.getElementById('prepend-small-btn3').value = this.value;">
															</div>
															<input type="text" name="file" id="prepend-small-btn3" placeholder="no file selected" required>
														</div>
													</div>
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
																<input type="file" name="berkas" required onchange="document.getElementById('prepend-small-btn2').value = this.value;">
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
				<table id="prosedur" class="table table-bordered table-hover table-responsive" style="width: 100%;">
					<thead>
						<tr>
							<th>No.</th>
							<th>Judul Pengumuman</th>
							<th>Narasi</th>
							<th>Tanggal Dibuat</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
				<!-- Show Modal -->
				<div class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog" id="prosedur_modal">
					<div class="modal-dialog">
						<form id="prosedurData" enctype="multipart/form-data">
							@csrf
							<div class="modal-content">
								<input type="hidden" id="prosedur_id" name="opd_id" value="">
								<div class="modal-close-area modal-close-df">
									<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
								</div>
								<div class="modal-body">
									<table>
										<tr>
											<td>Judul Pengumuman</td>
										</tr>
										<tr>
											<td>
												<input type="hidden" name="id" class="form-control" value="">
												<input type="text" id="judul_prosedur" name="judul_prosedur" class="form-control" value="" autofocus required>
											</td>
										</tr>
										<tr>
											<td>Narasi</td>
										</tr>
										<tr>
											<td>
												<textarea id="narasi" class="form-control" name="narasi" cols="60" rows="10" placeholder="Narasi pengumuman..." required></textarea>
											</td>
										</tr>
										<tr>
											<td>Upload Foto</td>
										</tr>
										<tr>
											<td>
												<div class="file-upload-inner ts-forms">
													<div class="input prepend-small-btn">
														<div class="file-button">
															Browse
															<input type="file" id="foto" name="foto" onchange="document.getElementById('prepend-small-btn5').value = this.value;">
														</div>
														<input type="text" name="file" id="prepend-small-btn5" value="" placeholder="no file selected">
													</div>
												</div>
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
															<input type="file" id="berkas" name="berkas" onchange="document.getElementById('prepend-small-btn').value = this.value;">
														</div>
														<input type="text" name="berkas" id="prepend-small-btn" value="" placeholder="no file selected">
													</div>
												</div>
											</td>
										</tr>

									</table>
								</div>

								<div class="modal-footer">
									<input type="submit" value="Submit" id="submit-edit" class="btn btn-custon-four btn-primary btn-md">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- Show Modal -->
				<div class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog" id="show_modal">
					<div class="modal-dialog">
						<form id="companydata">
							<div class="modal-content">
								<div class="modal-close-area modal-close-df">
									<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
								</div>
								<div class="modal-body">
									<img id="img" src="" alt="">
								</div>

								<div class="modal-footer">
									<!-- <input type="submit" value="Submit" id="submit-edit" class="btn btn-custon-four btn-primary btn-md"> -->
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
		var table = $('#prosedur').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('admin.getProsedur') }}",
			columns: [{
					data: 'DT_RowIndex',
					name: 'DT_RowIndex',
					orderable: false,
					searchable: false
				},
				{
					data: 'judul_prosedur',
					name: 'judul_prosedur',
				},
				{
					data: 'narasi',
					name: 'narasi',
				},
				{
					data: 'created_at',
					name: 'created_at',
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

	//--------------Fungsi Show Gambar ------------
	$(document).ready(function() {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('body').on('click', '#showProsedur', function(event) {

			event.preventDefault();
			var id = $(this).data('id');
			console.log(id)
			$.get('{{url("admin/edit-prosedur")}}' + '/' + id, function(data) {
				console.log(data);
				$('#userCrudModal').html("Show Prosedur");
				$('#show_modal').modal('show');
				$('#img').attr('src', "{{asset('storage/foto_berita')}}" + '/' + data.data.foto);
			})
		});


		//--------------Fungsi Edit & Update  Belum Selesai------------
		$('body').on('click', '#editProsedur', function(event) {

			event.preventDefault();
			var id = $(this).data('id');
			console.log(id)
			$.get('{{url("admin/edit-prosedur")}}' + '/' + id, function(data) {
				console.log(data);
				$('#userCrudModal').html("Edit Prosedur");
				$('#submit-edit').val("Edit Prosedur");
				$('#opd_modal').modal('show');
				$('#prosedur_id').val(data.data.id);
				$('#judul_prosedur').val(data.data.judul_prosedur);
				$('#narasi').val(data.data.narasi);
			})
		});


		$('body').on('click', '#submit-edit', function(event) {
			event.preventDefault()
			var token = '{{ csrf_token() }}';
			var id = $("#prosedur_id").val();
			var data = new FormData();
			data.append('id', $("#prosedur_id").val());
			data.append('judul_prosedur', $("#judul_prosedur").val());
			data.append('narasi', $("#narasi").val());
			data.append('foto', $("#foto")[0].files[0]);
			data.append('berkas', $("#berkas")[0].files[0]);
			// data.append('_token', token);
			console.log(data);


			$.ajax({
				url: '{{url("admin/update-prosedur")}}' + '/' + id,
				processData: false,
				contentType: false,
				type: "PUT",
				data: data,
				dataType: 'json',
				success: function(data) {

					$('#prosedurdata').trigger("reset");
					$('#prosedur_modal').modal('hide');
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
						url: '{{ url("admin/delete-prosedur/")}}' + '/' + id,
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