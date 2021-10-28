@extends('homepage::layouts.app')

@section('htmlheader_title')
Inspirasi Sida
@endsection
@section('navbar')
<ul class="navbar-nav mr-auto w-100 justify-content-end">
	@auth
	<li class="nav-item"><a href="#" title="Dashboard">Hi, {{Auth::user()->nama}}</a></li>
	<li class="nav-item">
		<a class="nav-link page-scroll" href="{{route('sipeena')}}">Home</a>
	</li>
	<li class="nav-item">
		<a class="nav-link page-scroll" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
	</li>
	</li>
	@endauth
</ul>
@endsection
@section('main-content')
<section id="contact" class="section">
	<!--- End Alert Modal -->
	<div class="contact-form">
		<div class="container">
			<div class="section-header">
				<h2 class="section-title">Form Pendaftaran</h2>
				<span>Penelitian</span>
				<br><br>
				<select class="form-control" id="kriteria" style="padding: 0px 15px; border-radius: 150px" onchange="TampilMhs(this.value)">
					<option value="">*Pilih Kriteria Peserta</option>
					<option value="ind">Individu</option>
					<option value="klp">Kelompok</option>
					<option value="lmb">Lembaga/Instansi</option>
				</select>
				<hr>
			</div>

			<div id="MhsData"></div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-mb-12">
					<form action="{{url('sipeena/store-form-klp-research')}}" method="post" enctype="multipart/form-data">
						@csrf
						<table width="100%">
						<tr>
								<td width="20%" height="45px" valign="top">Nama Ketua Kelompok <small>
										<font color="red">*</font>
									</small></td>
								<td width="30%" height="45px" valign="top">
									<input name="nama" value="{{old('nama')}}" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required>
									@error('nama')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
								<td width="20%" height="45px" valign="top">Tempat/Tanggal Lahir <small>
										<font color="red">*</font>
									</small></td>
								<td width="30%" height="45px" valign="top">
									<input name="ttl" value="{{old('ttl')}}" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="date" required>
									@error('ttl')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td width="20%" height="45px" valign="top">Agama <small>
										<font color="red">*</font>
									</small></td>
								<td width="30%" height="45px" valign="top">
									<select name="agama" class="form-control" style=" padding: 0px 3px; border-radius: 10px;" required>
										<option>-Pilih Agama-</option>
										<option value="Islam">Islam</option>
										<option value="Kristen">Kristen</option>
										<option value="Katolik">Katolik</option>
										<option value="Hindu">Hindu</option>
										<option value="Budha">Budha</option>
										<option value="Lainnya">Lainnya</option>
									</select>
									@error('agama')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
								<td width="20%" height="45px" valign="top">Pekerjaan <small>
										<font color="red">*</font>
									</small></td>
								<td width="30%" height="45px" valign="top">
									<input name="pekerjaan" value="{{old('pekerjaan')}}" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required>
									@error('pekerjaan')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td width="20%" height="45px" valign="top">Email <small>
										<font color="red">*</font>
									</small><br><small>*) Pastikan email Anda benar</small></td>
								<td width="30%" height="45px" valign="top">
									<input name="email" value="{{old('email')}}" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required>
									@error('email')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
								<td width="20%" height="45px" valign="top">Pendidikan <small>
										<font color="red">*</font>
									</small></td>
								<td width="30%" height="45px" valign="top">
									<input name="pendidikan" value="{{old('pendidikan')}}" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required>
									@error('pendidikan')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td width="20%" height="45px" valign="top">Warga Negara <small>
										<font color="red">*</font>
									</small></td>
								<td width="30%" height="45px" valign="top">
									<input name="nation" value="{{old('nation')}}" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required>
									@error('nation')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
								<td width="20%" height="45px" valign="top">KTP/Kartu Pelajar (.jpg) <small>
										<font color="red">*</font>
									</small></td>
								<td width="30%" height="45px" valign="top">
									<input name="ktp" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="file" required>
									@error('ktp')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td width="20%" height="45px" valign="top">No. Telepon <small>
										<font color="red">*</font>
									</small></td>
								<td width="30%" height="45px" valign="top">
									<input name="telp" value="{{old('telp')}}" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required>
									@error('telp')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
								<td width="20%" height="45px" valign="top">Surat Persetujuan Orang Tua<br><small>**) Diisii khusus pelajar (Format .jpg)</small></td>
								<td width="30%" height="45px" valign="top">
									<input name="izin_ortu" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="file">
									@error('izin_ortu')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td width="20%" height="45px" valign="top">Surat Persetujuan Sekolah<br><small>**) Diisii khusus pelajar (Format .jpg)</small></td>
								<td width="30%" height="45px" valign="top">
									<input name="izin_sekolah" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="file">
									@error('izin_sekolah')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
								<td width="20%" height="45px" valign="top">Surat Pernyataan (.jpg) <small>
										<font color="red">*</font>
									</small></td>
								<td width="30%" height="45px" valign="top">
									<input name="surat_pernyataan" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="file" required>
									@error('surat_pernyataan')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
							</tr>
							<tr>
								<td width="20%" height="45px" valign="top">Alamat <small>
										<font color="red">*</font>
									</small></td>
								<td width="30%" height="45px" valign="top">
									<textarea name="alamat" class="form-control" style="padding: 3px 3px; border-radius: 15px;" rows="3" cols="30" required>{{old('alamat')}}</textarea>
									@error('alamat')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
								<td width="20%" height="45px" valign="top">
									<label for="toge">
										Proposal (.pdf) <small>
											<font color="red">*</font>
										</small><br>
										<small>**) Besar File Maksimal 5 MB,</small><br>
										<small> Jika file lebih dari 5 MB silahkan upload ke Cloud(Dropbox, Google Drive ) isi url proposal dengan menchecklist checkbox berikut
											<input type="checkbox" name="" value="a" id="toggle">
										</small>
									</label>
								</td>
								<td width="30%" height="45px" valign="top">
									<input id="if" name="proposal" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="file" required>
									<input id="iu" name="url_proposal" class="form-control" placeholder="http://..." style="padding: 3px 3px; border-radius: 15px; display: none;" type="text">
									@error('proposal')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
									@error('url_proposal')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</td>
							</tr>
								<td colspan="4" align="center">
									<div class="captcha">
										<span>{!! captcha_img('math') !!}</span>
										<button type="button" class="btn btn-common btn-effect" id="refresh">
											<i class="fa fa-sync-alt" id="refresh"></i>
										</button>
									</div>
									<input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
									<button name="simpan" type="submit" class="btn btn-common btn-effect">Simpan</button>
									<!-- <button type="reset" class="btn btn-default btn-effect">Reset</button> -->
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('custom_scripts')
<script type="text/javascript">
	document.getElementById('toggle').addEventListener('change', function() {
		// toge nya disini, sesuaikan aja mana yg mau
		// di tampilin duluan input (file / url)
		if (this.checked == true) {
			document.getElementById('iu').style.display = 'block'
			document.getElementById('iu').required = true;
			document.getElementById('if').style.display = 'none'
			document.getElementById('if').required = false;
		} else {
			document.getElementById('iu').style.display = 'none'
			document.getElementById('iu').required = false;
			document.getElementById('if').style.display = 'block'
			document.getElementById('if').required = true;
		}
	})
	$('#refresh').click(function() {
		$.ajax({
			type: 'GET',
			url: '{{url("sipeena/refreshcaptcha")}}',
			success: function(data) {
				$(".captcha span").html(data.captcha);
			}
		});
	});

	function TampilMhs(str) {
		if (str == "") {
			document.getElementById("MhsData").innerHTML = "--- Form Pendaftaran ---";
			return;
		} else if (str == "ind") {
			$("#kriteria").click(function() {
				window.location.href = "{{url('sipeena/penelitian/form-ind-research')}}";
			});
			return;
		} else if (str == "klp") {
			$("#kriteria").click(function() {
				window.location.href = "{{url('sipeena/penelitian/form-klp-research')}}";
			});
			return;
		} else if (str == "lmb") {
			$("#kriteria").click(function() {
				window.location.href = "{{url('sipeena/penelitian/form-lmb-research')}}";
			});
			return;
		}

	}
</script>
@endsection