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
                    <td>{{$data->judul}}</td>
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