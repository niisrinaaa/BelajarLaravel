@extends('template')

@section('title', 'Court Type')
@section('content-title', 'Court Type')
@section('content')
<div class="col-md-8">
  <a class="btn btn-success" href="">ADD Data</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <td>id</td>
        <td>Court Tipe</td>
        <td>action</td>
        </tr>
        @forelse ($types as $type)
        <tr>
          <td>{{ $loop -> iteration }}</td>
          <td>{{$type -> Name}}</td>
          <td>
            <a class="btn btn-sm btn-warning" href="">Edit</a>
            <a class="btn btn-sm btn-danger" href="">Hapus</a>
          </td>
        </tr>  
        @empty
            
        @endforelse
        </thead>
  </table>
</div>
<div class="col-md-4">
</div>
@endsection