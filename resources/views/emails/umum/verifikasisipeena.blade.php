@if($pendaftaran->verifikasi === 1)
<!DOCTYPE html>
<html lang="en">
<body>	
<p>Kepada {{ $pendaftaran->nama}}</p>
<p>Selamat! Proposal siPeena Anda dinyatakan <b>DITERIMA</b>.
<br>Mohon tunggu info selanjutnya.
<br><br>
</p>
<p>Terima Kasih</p>
</body>
</html>
@endif
 
@if($pendaftaran->verifikasi === -1)
<!DOCTYPE html>
<html lang="en">
<body>
<p>Kepada {{ $pendaftaran->nama }}</p>
Mohon maaf, Proposal siPeena Anda dinyatakan <b>DITOLAK</b>.<br>
Dikarenakan '{{$pendaftaran->ket}}'<br><br>
Terimakasih telah berpartisipasi dalam Lomba siPeena.<br><br>
<p>Terima Kasih</p>
</body>
</html>
@endif