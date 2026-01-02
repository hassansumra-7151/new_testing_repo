@extends('admin.master')

@section('content')
<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Category Data</h3>
                        <a href="{{ route('createPage')}}"  class="btn btn-warning">Add Category</a>
                    </div>
                </div>
                @if(!empty(Session::get('success')))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(!empty(Session::get('fail')))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <div class="table-responsive">
                    <table class="table align-items-center table-flush" id="tables">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Sr No:</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Parent Category</th>
                                <th scope="col">Code</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getData as $key=> $row)
                            <tr>
                              <td>{{ $loop->index + 1 }}</td>
                              <td>{{$row->category_name}}</td>
                              <td>{{$row->parent_category}}</td>
                              <td>{{$row->code}}</td>
                              <td>{{$row->brand}}</td>
                              <td>{{$row->price}}</td>
                              <td>
                                @if ($row->status == 1)
                                    <span class="badge badge-success badge-lg">Active</span>
                                @else
                                    <span class="badge badge-danger badge-lg">Inactive</span>
                                @endif
                              </td>
                              <td>
                                    <a href="{{ route('edit', $row->id) }}" class="btn btn-sm" style="background-color: #FFCC00; color: #fff;">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                 <a href="{{ route('category_delete',$row->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                        target="_blank">Creative Tim</a>
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link"
                            target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                            class="nav-link" target="_blank">MIT License</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</div>
@endsection
