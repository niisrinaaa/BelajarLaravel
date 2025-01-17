@extends('template')
@section('title', 'Project')
@section('content-title', 'service')
@section('content')
                    <div class="column">
                        <div class="col-md-12 pe-3 mt-3 ps-3">
                          <!-- project -->
                         <div class="card">
                         <div class="card-header"><h1>home</h1></div>
                         <div class="card-body">
                           <table class="table table-striped">
                           <thead>
                             <tr>
                               <th scope="col">No.</th>
                               <th scope="col">Project Name</th>
                               <th scope="col">Action</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                               <th scope="row">1</th>
                               <td>Web Design</td>
                               <td>
                                   <a href="" class="btn btn-sm btn-success">Edit</a>
                                   <a href="" class="btn btn-sm btn-danger">Delete</a>
                               </td>
                             </tr>
                             <tr>
                               <th scope="row">2</th>
                               <td>Database</td>
                               <td>
                                   <a href="" class="btn btn-sm btn-success">Edit</a>
                                   <a href="" class="btn btn-sm btn-danger">Delete</a>
                               </td>
                             </tr>
                           </tbody>
                         </table>
                       </div>
                     </div>
                          <!-- service -->
                           <div class="card mt-3">
                             <div class="card-header"><h1><span>Service Review</span></h1></div>
                             <div class="card-body">
                                <div class="row p-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title">Web Designer UI/UX</h5>
                                          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum a ut maiores numquam debitis provident repellendus labore iste, pariatur eveniet sed dolorum iure, asperiores, recusandae dolorem voluptas aut doloribus facere!</p>
                                          <a href="#" class="btn btn-primary">Go</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title">Front-End Developer</h5>
                                          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat nihil praesentium nam fuga, quos tempora? Voluptate impedit quos cumque, sapiente dicta rerum modi nam natus eius dolor placeat accusantium recusandae.</p>
                                          <a href="#" class="btn btn-primary">Go</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row p-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title">Back-end Developer</h5>
                                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam odit laborum provident, itaque eaque ex placeat repellendus nostrum sequi sit dolore, ducimus hic! Deleniti sit dignissimos nesciunt debitis, harum neque?</p>
                                          <a href="#" class="btn btn-primary">Go</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title">Full-stack Developer</h5>
                                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque doloremque, ipsam amet commodi explicabo odit incidunt natus id quasi dolorem praesentium pariatur excepturi sint nostrum exercitationem tempore esse facere labore?</p>
                                          <a href="#" class="btn btn-primary">Go</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                                </div>
                            </div>
                        </div>
@endsection