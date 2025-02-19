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
        <td>Court Tipe</td>
        <td>Court Name</td>
        <td>action</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <a class="btn btn-sm btn-warning" href="">Edit</a>
            <a class="btn btn-sm btn-danger" href="">Hapus</a>
          </td>
        </tr>
        </thead>
  </table>
</div>
<div class="col-md-4">
</div>

@endsection