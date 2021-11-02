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
<section id="portfolios" class="section">
  <div class="card">
    <div class="card-body">
      <h2>Inovasi</h2>
      <table id="inovasi" class="table">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Verifikasi</th>
            <th>Kategori</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
      <div id="showDataInovasi_modal" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
              <center>

              </center>
            </div>
            <div class="modal-footer danger-md">
              <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h2>Penelitian</h2>
      <table id="penelitian" class="table">
        <thead class="thead-light">
          <tr>
            <th>#</th>
            <th>Nama Penanggung Jawab</th>
            <th>Email</th>
            <th>Verifikasi</th>
            <th>Status</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
      <div id="showDataPenelitian_modal" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
              <center>

              </center>
            </div>
            <div class="modal-footer danger-md">
              <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h2>Lembaga</h2>
      <table id="lembaga" class="table">
        <thead class="thead-light">
          <tr>
            <th>#</th>
            <th>Nama Penanggung Jawab</th>
            <th>Nama Lembaga</th>
            <th>Email</th>
            <th>Verifikasi</th>
            <th>Kategori</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
      <div id="showDataLembaga_modal" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
              <center>

              </center>
            </div>
            <div class="modal-footer danger-md">
              <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h2>OPD</h2>
      <table id="opd" class="table">
        <thead class="thead-light">
          <tr>
            <th>#</th>
            <th>Nama OPD</th>
            <th>Nama Penanggung Jawab</th>
            <th>NIP</th>
            <th>Jabatan</th>
            <th>Email</th>
            <th>Verifikasi</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
      <div id="showDataOpd_modal" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
              <center>

              </center>
            </div>
            <div class="modal-footer danger-md">
              <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection
@section('custom_scripts')
<script type="text/javascript">
  //--------------Fungsi Yajra DataTables------------
  //Inovasi
  $(function() {
    var table = $('#inovasi').DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: "{{ route('riwayat.getPendaftaranInovasi') }}",
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
          data: 'email',
          name: 'email',
        },
        {
          data: 'verifikasi',
          name: 'verifikasi',
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

  $('body').on('click', '#showInovasi', function(event) {

    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('{{url("sipeena/showPendaftaranInovasi")}}' + '/' + id, function(data) {
      console.log(data);
      $('#userCrudModal').html("Show Inovasi");
      $('#submit-edit').val("Show Inovasi");
      $('#showDataInovasi_modal').modal('show');
      $('.modal-body').text(data.data.ket)
    })
  });
  //Penelitian
  $(function() {
    var table = $('#penelitian').DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: "{{ route('riwayat.getPendaftaranPenelitian') }}",
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
          data: 'email',
          name: 'email',
        },
        {
          data: 'verifikasi',
          name: 'verifikasi',
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

  $('body').on('click', '#showPenelitian', function(event) {

    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('{{url("sipeena/showPendaftaranPenelitian")}}' + '/' + id, function(data) {
      console.log(data);
      $('#userCrudModal').html("Show Penelitian");
      $('#submit-edit').val("Show Penelitian");
      $('#showDataPenelitian_modal').modal('show');
      $('.modal-body').text(data.data.ket)
    })
  });
  //Lembaga
  $(function() {
    var table = $('#lembaga').DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: "{{ route('riwayat.getLembaga') }}",
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
          data: 'nama_lembaga',
          name: 'nama_lembaga',
        },
        {
          data: 'email',
          name: 'email',
        },
        {
          data: 'verifikasi',
          name: 'verifikasi',
        },
        {
          data: 'kategori_peena',
          name: 'kategori_peena',
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

  $('body').on('click', '#showLembaga', function(event) {

    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('{{url("sipeena/showLembaga")}}' + '/' + id, function(data) {
      console.log(data);
      $('#userCrudModal').html("Show Lembaga");
      $('#submit-edit').val("Show Lembaga");
      $('#showDataLembaga_modal').modal('show');
      $('.modal-body').text(data.data.ket)
    })
  });
  //OPD
  $(function() {
    var table = $('#opd').DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: "{{ route('riwayat.getOpd') }}",
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
          data: 'tgjawab',
          name: 'tgjawab',
        },
        {
          data: 'nip',
          name: 'nip',
        },
        {
          data: 'jabatan',
          name: 'jabatan',
        },
        {
          data: 'email',
          name: 'email',
        },
        {
          data: 'verifikasi',
          name: 'verifikasi',
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

  $('body').on('click', '#showOpd', function(event) {

    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('{{url("sipeena/showOpd")}}' + '/' + id, function(data) {
      console.log(data);
      $('#userCrudModal').html("Show OPD");
      $('#submit-edit').val("Show OPD");
      $('#showDataOPD_modal').modal('show');
      $('.modal-body').text(data.data.ket)
    })
  });
</script>
@endsection