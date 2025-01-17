@extends('template')

@section('title', 'Project')
@section('content-title')
@section('content')
<div id="vice" class="col-md-8">
    <div class="card shadow">
        <div class="card-header"><h6>Data project</h6></div>
        <div class="card-body">
        <table class="table table-responsive" >
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">name</th>
                <th scope="col" style="width: 50%;">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Web fwawfiuwafhuiwfifw</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aut beatae sit earum corporis blanditiis maxime natus eius nemo ratione molestiae velit ad officiis error facilis dolor dolore, voluptatum impedit.</td>
                <td>
                    <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#detailproject"><i class="bi bi-eye-fill"></i></a>
                    <a href="" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>dmkwandjkwkfwmfwafw</td>
                <td>lorem ipsum</td>
                <td>
                    <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#detailproject"><i class="bi bi-eye-fill"></i></a>
                    <a href="" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></a>
                </td>
            </tr>
            </tbody>
        </table>  
        
        <div class="modal fade" id="detailproject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection