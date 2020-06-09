
@extends('homepage::layouts.app')

@section('htmlheader_title')
	eLitbang
@endsection

@section('main-content')
<section id="contact" class="section">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif       
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
			  <form action="{{url('sipeena/store-form-lmb-research')}}" name="form1" method="post" enctype="multipart/form-data">
	@csrf
	<table width="100%">
		<tr>
			<td width="20%" height="45px" valign="top">Nama Penanggung Jawab <small><font color="red">*</font></small></td>
			<td width="30%" height="45px" valign="top"><input name="nama" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required></td>
			<td width="20%" height="45px" valign="top">Nama Lembaga <small><font color="red">*</font></small></td>
			<td width="30%" height="45px" valign="top"><input name="nama_lembaga" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required></td>
		</tr>
		<tr>
			<td width="20%" height="45px" valign="top">Email <small><font color="red">*</font></small><br><small>*) Pastikan email Anda benar</small></td>
			<td width="30%" height="45px" valign="top"><input name="email" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required></td>
			<td width="20%" height="45px" valign="top">KTP Penanggung Jawab (.jpg) <small><font color="red">*</font></small></td>
			<td width="30%" height="45px" valign="top"><input name="ktp" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="file" required></td>
		</tr>
		<tr>
			<td width="20%" height="45px" valign="top">No. Telepon <small><font color="red">*</font></small></td>
			<td width="30%" height="45px" valign="top"><input name="telp" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required></td>
			<td width="20%" height="45px" valign="top">Surat Pernyataan (.jpg) <small><font color="red">*</font></small></td>
			<td width="30%" height="45px" valign="top"><input name="surat_pernyataan" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="file" required></td>
		</tr>
	    <tr>
	      <td width="20%" height="45px" valign="top">Alamat <small><font color="red">*</font></small></td>
	      <td width="30%" height="45px" valign="top"><textarea name="alamat" class="form-control" style="padding: 3px 3px; border-radius: 15px;" rows="3" cols="30" required></textarea></td>
	      <td width="20%" height="45px" valign="top">File Proposal (.pdf) <small><font color="red">*</font></small></td>
	      <td width="30%" height="45px" valign="top"><input name="proposal" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="file" required></td>
	    </tr>
	    <tr>
			<td width="20%" height="45px" valign="top">&nbsp;</td>
			<td width="30%" height="45px" valign="top">&nbsp;</td>
			<td width="20%" height="45px" valign="top">Alamat URL Proposal <small><font color="red">*</font></small></td>
			<td width="30%" height="45px" valign="top"><input name="url_proposal" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required></td>
		</tr>
		<tr>
			<td colspan="4" align="center">
				<img src="../captcha/captcha.php"><br>
	        <input class="form-control" name="captcha" type="text" value="Hasilnya Adalah: " onBlur="if(this.value=='') this.value='Hasilnya Adalah: '" onFocus="if(this.value =='Hasilnya Adalah: ' ) this.value=''" required/>
	        
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
<script>
     function TampilMhs(str) {
          if (str == "") {
              document.getElementById("MhsData").innerHTML = "--- Form Pendaftaran ---";
              return;
          } else if (str == "ind") {
            $("#kriteria").click(function(){              
              window.location.href = "{{url('sipeena/penelitian/form-ind-research')}}" ;
            });
            return;
          } else if (str == "klp") {
            $("#kriteria").click(function(){
                window.location.href = "{{url('sipeena/penelitian/form-klp-research')}}" ;
            });
            return;
          } else if (str == "lmb") {
            $("#kriteria").click(function(){
              window.location.href = "{{url('sipeena/penelitian/form-lmb-research')}}" ;
            });
            return;
          }

      }
</script>
@endsection

