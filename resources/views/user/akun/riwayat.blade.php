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
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Verifikasi</th>
            <th>Status</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no=1;
          @endphp
          @forelse ($pendaftaranInovasi as $data)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$data->nama}}</td>
            <td>{{$data->email}}</td>
            <td>
              @if($data->verifikasi == 0)
              <span class="badge badge-primary">Tahap Verifikasi</span>
              @elseif($data->verifikasi == -1)
              <span class="badge badge-danger">Ditolak</span>
              @elseif($data->verifikasi == 1)
              <span class="badge badge-warning">Di ACC</span>
              @elseif($data->verifikasi == 2)
              <span class="badge badge-success">Finalis</span>
              @endif
            </td>
            <td>@if($data->kelompok === 0)
              <span class="label label-warning">Individu</span>
              @elseif($data->kelompok === 1)
              <span class="label label-success">Kelompok</span>
              @endif
            </td>
            <td>
              <button type="button" class="btn btn-custon-four btn-warning btn-xs" data-toggle="modal" data-target="#showData{{$data->id}}"><i class="fa fa-eye"></i></button>
              <div id="showData{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                      <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                      <center>
                        <h3>{{$data->ket ?? 'Belum Ada Keterangan'}}</h3>
                      </center>
                    </div>
                    <div class="modal-footer danger-md">
                      <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="6">Data Not Found</td>
          </tr>
          @endforelse
        </tbody>
      </table>
      {{$pendaftaranInovasi->links()}}
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h2>Penelitian</h2>
      <table class="table">
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
          @php
          $no=1;
          @endphp
          @forelse ($pendaftaranPenelitian as $data)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$data->nama}}</td>
            <td>{{$data->email}}</td>
            <td>
              @if($data->verifikasi == 0)
              <span class="badge badge-primary">Tahap Verifikasi</span>
              @elseif($data->verifikasi == -1)
              <span class="badge badge-danger">Ditolak</span>
              @elseif($data->verifikasi == 1)
              <span class="badge badge-warning">Di ACC</span>
              @elseif($data->verifikasi == 2)
              <span class="badge badge-success">Finalis</span>
              @endif
            </td>
            <td>@if($data->kelompok === 0)
              <span class="label label-warning">Individu</span>
              @elseif($data->kelompok === 1)
              <span class="label label-success">Kelompok</span>
              @endif
            </td>
            <td>
              <button type="button" class="btn btn-custon-four btn-warning btn-xs" data-toggle="modal" data-target="#showData{{$data->id}}"><i class="fa fa-eye"></i></button>
              <div id="showData{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                      <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                      <center>
                        <h3>{{$data->ket ?? 'Belum Ada Keterangan'}}</h3>
                      </center>
                    </div>
                    <div class="modal-footer danger-md">
                      <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="6">Data Not Found</td>
          </tr>
          @endforelse
        </tbody>
      </table>
      {{$pendaftaranPenelitian->links()}}
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h2>Lembaga</h2>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>#</th>
            <th>Nama Penanggung Jawab</th>
            <th>Nama Lembaga</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Verifikasi</th>
            <th>Kategori</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no=1;
          @endphp
          @forelse ($lembaga as $data)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$data->nama}}</td>
            <td>{{$data->nama_lembaga}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->email}}</td>
            <td>
              @if($data->verifikasi == 0)
              <span class="badge badge-primary">Tahap Verifikasi</span>
              @elseif($data->verifikasi == -1)
              <span class="badge badge-danger">Ditolak</span>
              @elseif($data->verifikasi == 1)
              <span class="badge badge-warning">Di ACC</span>
              @elseif($data->verifikasi == 2)
              <span class="badge badge-success">Finalis</span>
              @endif
            </td>
            <td>@if($data->kategori_peena === 0)
              <span class="label label-warning">Inovasi</span>
              @elseif($data->kategori_peena === 1)
              <span class="label label-success">Penelitian</span>
              @endif
            </td>
            <td>
              <button type="button" class="btn btn-custon-four btn-warning btn-xs" data-toggle="modal" data-target="#showData{{$data->id}}"><i class="fa fa-eye"></i></button>
              <div id="showData{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                      <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                      <center>
                        <h3>{{$data->ket ?? 'Belum Ada Keterangan'}}</h3>
                      </center>
                    </div>
                    <div class="modal-footer danger-md">
                      <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="8">Data Not Found</td>
          </tr>
          @endforelse
        </tbody>
      </table>
      {{$lembaga->links()}}
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h2>OPD</h2>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>#</th>
            <th>Nama OPD</th>
            <th>Nama Penanggung Jawab</th>
            <th>NIP</th>
            <th>Jabatan</th>
            <th>Email</th>
            <th>Verifikasi</th>
            <th>Kategori</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no=1;
          @endphp
          @forelse ($pena_opd as $data)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$data->nama}}</td>
            <td>{{$data->tgjawab}}</td>
            <td>{{$data->nip}}</td>
            <td>{{$data->jabatan}}</td>
            <td>{{$data->email}}</td>
            <td>
              @if($data->verifikasi == 0)
              <span class="badge badge-primary">Tahap Verifikasi</span>
              @elseif($data->verifikasi == -1)
              <span class="badge badge-danger">Ditolak</span>
              @elseif($data->verifikasi == 1)
              <span class="badge badge-warning">Di ACC</span>
              @elseif($data->verifikasi == 2)
              <span class="badge badge-success">Finalis</span>
              @endif
            </td>
            <td>
              <button type="button" class="btn btn-custon-four btn-warning btn-xs" data-toggle="modal" data-target="#showData{{$data->id}}"><i class="fa fa-eye"></i></button>
              <div id="showData{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                      <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                      <center>
                        <h3>{{$data->ket ?? 'Belum Ada Keterangan'}}</h3>
                      </center>
                    </div>
                    <div class="modal-footer danger-md">
                      <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="9">Data Not Found</td>
          </tr>
          @endforelse
        </tbody>
      </table>
      {{$lembaga->links()}}
    </div>
  </div>

</section>
@endsection
@section('custom_scripts')
@endsection