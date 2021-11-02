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
<h4>Data Ditolak Pendaftaran SiPeena</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
			<ul id="myTabedu1" class="tab-review-design">
				<li class="active"><a data-toggle="tab" href="#TabPerorangan">Perorangan</a>
				</li>
				<li><a data-toggle="tab" href="#TabKelompok">Kelompok</a>
				</li>
				<li><a data-toggle="tab" href="#TabLembaga">Lembaga/Instansi</a>
				</li>
				<li><a data-toggle="tab" href="#TabOpd">Perangkat Daerah</a>
				</li>
			</ul>
			<div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
				<div class="product-tab-list tab-pane fade active in" id="TabPerorangan">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="review-content-section">
								<div class="row">
									<div class="col-lg-12">
										<table id="individu" class="table table-bordered table-hover table-responsive">
											<thead>
												<tr>
													<th>No.</th>
													<th>Nama Pendaftar</th>
													<th>Email</th>
													<th>Tempat Tanggal Lahir</th>
													<th>Kategori siPeena</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="product-tab-list tab-pane fade" id="TabKelompok">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="review-content-section">
								<div class="row">
									<div class="col-lg-12">
										<table id="kelompok" class="table table-bordered table-hover table-responsive">
											<thead>
												<tr>
													<th>No.</th>
													<th>Nama Pendaftar</th>
													<th>Email</th>
													<th>Tempat Tanggal Lahir</th>
													<th>Kategori siPeena</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="product-tab-list tab-pane fade" id="TabLembaga">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="review-content-section">
								<div class="row">
									<div class="col-lg-12">
										<table id="lembaga" class="table table-bordered table-hover table-responsive">
											<thead>
												<tr>
													<th>No.</th>
													<th>Nama Pendaftar</th>
													<th>Nama Lembaga</th>
													<th>Email</th>
													<th>Kategori siPeena</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="product-tab-list tab-pane fade" id="TabOpd">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="review-content-section">
								<div class="row">
									<div class="col-lg-12">
										<table id="opd" class="table table-bordered table-hover table-responsive">
											<thead>
												<tr>
													<th>No.</th>
													<th>Nama OPD</th>
													<th>Nama Pendaftar</th>
													<th>NIP</th>
													<th>Email</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
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
	$(function() {
		var table = $('#individu').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('admin.getDitolakIndividu') }}",
			columns: [{
					name: 'DT_RowIndex',
					data: 'DT_RowIndex',
					orderable: false,
					searchable: false
				},
				{
					name: 'nama',
					data: 'nama',
				},
				{
					name: 'email',
					data: 'email',
				},
				{
					name: 'ttl',
					data: 'ttl',
				},
				{
					name: 'kategori_peena',
					data: 'kategori_peena',
				},
				{
					name: 'action',
					data: 'action',
					orderable: false,
					searchable: false
				},
			],
		});
	});

	$(function() {
		var table = $('#kelompok').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('admin.getDitolakKelompok') }}",
			columns: [{
					name: 'DT_RowIndex',
					data: 'DT_RowIndex',
					orderable: false,
					searchable: false
				},
				{
					name: 'nama',
					data: 'nama',
				},
				{
					name: 'email',
					data: 'email',
				},
				{
					name: 'ttl',
					data: 'ttl',
				},
				{
					name: 'kategori_peena',
					data: 'kategori_peena',
				},
				{
					name: 'action',
					data: 'action',
					orderable: false,
					searchable: false
				},
			],
		});
	});

	$(function() {
		var table = $('#lembaga').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('admin.getDitolakLembaga') }}",
			columns: [{
					name: 'DT_RowIndex',
					data: 'DT_RowIndex',
					orderable: false,
					searchable: false
				},
				{
					name: 'nama',
					data: 'nama',
				},
				{
					name: 'nama_lembaga',
					data: 'nama_lembaga',
				},
				{
					name: 'email',
					data: 'email',
				},
				{
					name: 'kategori_peena',
					data: 'kategori_peena',
				},
				{
					name: 'action',
					data: 'action',
					orderable: false,
					searchable: false
				},
			],
		});
	});

	$(function() {
		var table = $('#opd').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('admin.getDitolakOpd') }}",
			columns: [{
					name: 'DT_RowIndex',
					data: 'DT_RowIndex',
					orderable: false,
					searchable: false
				},
				{
					name: 'nama',
					data: 'nama',
				},
				{
					name: 'tgjawab',
					data: 'tgjawab',
				},
				{
					name: 'nip',
					data: 'nip',
				},
				{
					name: 'email',
					data: 'email',
				},
				{
					name: 'action',
					data: 'action',
					orderable: false,
					searchable: false
				},
			],
		});
	});
	//--------------Fungsi Delete ------------
	function deleteItemPendaftaran(e) {

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
						url: '{{ url("admin/delete-data-sipeena-pendaftaran")}}' + '/' + id,
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

	function deleteItemLembaga(e) {

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
						url: '{{ url("admin/delete-data-sipeena-lembaga")}}' + '/' + id,
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

	function deleteItemOpd(e) {

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
						url: '{{ url("admin/delete-data-sipeena-opd")}}' + '/' + id,
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