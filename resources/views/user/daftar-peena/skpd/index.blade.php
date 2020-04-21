@extends('homepage::layouts.app')

@section('htmlheader_title')
	eLitbang
@endsection

@section('main-content')
<section id="contact" class="section">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Form Pendaftaran</h2>
            <span>Inovasi Perangkat Daerah</span>
            <br><br>
          </div>
          <div class="row">
          	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-mb-12">
          	  <form action="sv-skpd.php" name="form1" method="post" enctype="multipart/form-data">
          		<table width="100%">
	          		<tr>
	          			<td width="20%" height="45px" valign="top">Nama Perangkat Daerah <small><font color="red">*</font></small></td>
	          			<td width="30%" height="45px" valign="top">
                    <select name="nama" class="form-control" style="font-size: 12px; padding: 3px 3px; border-radius: 15px;" required>
                      <option>-Pilih Nama Perangkat Daerah-</option>
                    </select>
                    <!-- <input name="nama" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required> --></td>
	          			<td width="20%" height="45px" valign="top">Nama Lengkap <small><font color="red">*</font></small></td>
	          			<td width="30%" height="45px" valign="top"><input name="tgjawab" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required></td>
	          		</tr>
	          		<tr>
	          			<td width="20%" height="45px" valign="top">NIP <small><font color="red">*</font></small></td>
	          			<td width="30%" height="45px" valign="top"><input name="nip" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required></td>
	          			<td width="20%" height="45px" valign="top">Jabatan <small><font color="red">*</font></small></td>
	          			<td width="30%" height="45px" valign="top"><input name="jabatan" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required></td>
	          		</tr>
                <tr>
                  <td width="20%" height="45px" valign="top">Email <small><font color="red">*</font></small>
                    <br><small>*) Pastikan email Anda benar</small></td>
                  <td width="30%" height="45px" valign="top"><input name="email" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required></td>
                  <td width="20%" height="45px" valign="top">No. Telepon <small><font color="red">*</font></small></td>
                  <td width="30%" height="45px" valign="top"><input name="telp" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required></td>
                </tr>
                <tr>
                  <td width="20%" height="45px" valign="top">Surat Pernyataan Minat (.pdf) <small><font color="red">*</font></small></td>
                  <td width="30%" height="45px" valign="top"><input name="picture" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="file"></td>
                  <td width="20%" height="45px" valign="top">File Proposal (.pdf) <small><font color="red">*</font></small></td>
                  <td width="30%" height="45px" valign="top"><input name="picture2" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="file" required></td>
                </tr>
	          		<tr>
	          			<td width="20%" height="45px" valign="top">Alamat <small><font color="red">*</font></small></td>
	          			<td width="30%" height="45px" valign="top"><textarea name="alamat" class="form-control" style="padding: 3px 3px; border-radius: 15px;" rows="3" cols="30" required></textarea></td>
	          			<td width="20%" height="45px" valign="top">URL Proposal</td>
	          			<td width="30%" height="45px" valign="top"><input name="url" class="form-control" style="padding: 3px 3px; border-radius: 15px;" type="text" required></td>
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