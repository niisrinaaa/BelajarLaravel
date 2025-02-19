@extends('template')

@section('title', 'Court')
@section('content-title', 'Court')
@section('content')
<div class="col-md-8">
  <a class="btn btn-success" href="">ADD Data</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <td>id</td>
        {{-- <td>court id</td> --}}
        <td>Court Tipe</td>
        <td>Court Name</td>
        <td>Price</td>
        <td>action</td>
        </tr>
        @forelse ($courts as $court)
        <tr>
          <td>{{ $loop -> iteration }}</td>
          {{-- <td>{{$court -> courttype_id}}</td> --}}
          <td>{{$court -> type -> Name}}</td>
          <td>{{$court -> Name}}</td>
          <td>{{$court -> Price}}</td>
          <td>
            <a class="btn btn-sm btn-warning" href="">Edit</a>
            <a class="btn btn-sm btn-danger" href="">Hapus</a>
          </td>
        </tr>  
        @empty
          <div class="alert alert-danger">
          Belum ada  
          </div>  
        @endforelse
        </thead>
  </table>
</div>
<div class="col-md-4">
</div>

@endsection