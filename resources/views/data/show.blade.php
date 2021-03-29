@extends('layout.app')
@section('title', 'Dashboard')
@section('dashboard', 'Data Peserta')
@section('namedashboard', 'Detail Peserta ')
@section('content')
<h1>{{$student->nis}}</h1>

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