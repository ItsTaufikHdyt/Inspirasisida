@extends('homepage::layouts.app')

@section('htmlheader_title')
eLitbang
@endsection

@section('main-content')
<div class="col col-lg-12 col-md-12 bg-home">
    <section id="features" class="section ">
        <table id="dbopd" class="table">
            <thead>
                <tr>
                    <th data-field="no">No</th>
                    <th data-field="judul">Judul</th>
                    <th data-field="tahun">Tahun</th>
                    <th data-field="opd">Perangkat Daerah</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @forelse($dbopd as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>
                    <a href="#" data-toggle="modal" data-target="#dbopdpenelitian{{$data->id}}">
                    {{$data->judul}}
                    </a>
                    <!--- Pop Up Database -->
                    <div class="modal fade" id="dbopdpenelitian{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <td>{{$data->judul}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" width="30%"><b>Tahun</b></td>
                                                <td>{{$data->tahun}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" width="30%"><b>Perangkat Daerah</b></td>
                                                <td>{{$data->opd}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" width="30%"><b>Lokasi</b></td>
                                                <td>{{$data->lokasi}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" width="30%"><b>Abstraksi</b></td>
                                                <td>{!!$data->abstraksi!!}</td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--- End Up Database -->
                    </td>
                    <td>{{$data->tahun}}</td>
                    <td>{{$data->opd}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" align="center">Data Tidak Ada</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        
    </section>
</div>
@endsection
@section('custom_scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#dbopd').DataTable();
    } );
</script>
@endsection