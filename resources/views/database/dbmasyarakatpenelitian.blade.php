@extends('homepage::layouts.app')

@section('htmlheader_title')
Inpirasi Sida
@endsection
@section('navbar')
<ul class="navbar-nav mr-auto w-100 justify-content-end">
    <li class="nav-item">
        <a class="nav-link page-scroll" href="{{route('index')}}">Home</a>
    </li>
</ul>
@endsection
@section('main-content')
<div class="col col-lg-12 col-md-12 bg-home">
    <section id="features" class="section ">
        <table id="dbMasyarakatPenelitian" class="table" style="width: 100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tahun</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <!--- Pop Up Database -->
        <div class="modal fade" id="show_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="modal-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-12 ">
                                <table class="table table-striped table-lg">
                                    <tbody>

                                        <tr>
                                            <td class="text-left" width="30%"><b>Judul</b></td>
                                            <td id="judul"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left" width="30%"><b>Nama</b></td>
                                            <td id="nama"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left" width="30%"><b>Lokasi</b></td>
                                            <td id="lokasi"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left" width="30%"><b>Abstraksi</b></td>
                                            <td id="abstraksi"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left" width="30%"><b>Berkas</b></td>
                                            <td id="berkas"> <a href="" class="btn btn-warning" id="link-berkas" target="_blank">Downlaod Berkas</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('custom_scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#dbMasyarakat').DataTable();
    });
    //Inovasi
    $(function() {
        var table = $('#dbMasyarakatPenelitian').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('home.getDbMasyarakatPenelitian') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'judul',
                    name: 'judul',
                },
                {
                    data: 'tahun',
                    name: 'tahun',
                },
                {
                    data: 'nama',
                    name: 'nama',
                },
                
            ],
        });

    });

    $('body').on('click', '#showDbMasyarakatPenelitian', function(event) {

        event.preventDefault();
        var id = $(this).data('id');
        console.log(id)
        $.get('{{url("showdbmasyarakatinovasi")}}' + '/' + id, function(data) {
            console.log(data);
            $('#userCrudModal').html("Show Inovasi");
            $('#submit-edit').val("Show Inovasi");
            $('#showDataInovasi_modal').modal('show');
            $('#judul').text(data.data.judul);
            $('#nama').text(data.data.nama);
            $('#lokasi').text(data.data.lokasi);
            $('#abstraksi').text(data.data.abstraksi);
            var berkas = (data.data.berkas);
            $('#link-berkas').attr("href", '{{url("downloadDbMasyarakat")}}' + '/' + id);

        })
    });
</script>
@endsection