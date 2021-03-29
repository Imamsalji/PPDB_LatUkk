@extends('layout.app')
@section('title', 'Dashboard')
@section('dashboard', 'Data Pendaftar')
@section('namedashboard', 'Peserta ')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>x</span>
                        </button>
                        {{ session('message') }}
                    </div>
                </div>
                @elseif (session('delete'))
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>x</span>
                        </button>
                        {{ session('delete') }}
                    </div>
                </div>
                @endif
                <h3 class="mb-3">Data Peserta pendaftar</h3>
                <div class="table-responsive">
           <table id="myTable" class="table user-table">
               <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Keterangan</th>
                    <th></th>
                </tr>
               </thead>
               <tbody>
                @foreach ($datas as $item)
                <tr> 
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jk }}</td>
                    <td>{{ $item->temp_lahir }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->agama }}</td>
                    @if ($item->keterangan == 1)
                    <td><span class="badge badge-success">Diterima</span></td>
                    @elseif ($item->keterangan == NULL)
                    <td><span class="badge badge-warning">Proses</span>
                        <a class="btn btn-success" href="{{ route('diterima', $item->id) }}">Terima</a>
                        <a class="btn btn-danger" href="{{ route('ditolak', $item->id) }}">Tolak</a>
                    </td>

                    @else
                    <td><span class="badge badge-danger">Ditolak</span></td>

                    @endif 
                    <td><a href="">Selengkapnya...</a></td>
                    
                </tr>
                @endforeach
               </tbody>
           </table>
           </div>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
@push('page-scripts')
  
@endpush
@push('after-script')
<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endpush