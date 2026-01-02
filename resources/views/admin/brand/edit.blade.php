@extends('admin.master')

@section('content')
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-body">
              <form action="{{ route('brand_update', $brands->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$brands->id}}">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Brand Name</label>
                        <input type="text" required="" name="brand_name" class="form-control form-control-alternative" value="{{$brands->brand_name}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Brand Code</label>
                        <input type="text" name="code" required="" class="form-control form-control-alternative" value="{{$brands->code}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Brand</label>
                        <input type="text" name="brand" required="" class="form-control form-control-alternative" value="{{$brands->brand}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Price</label>
                        <input type="text" name="price" required="" class="form-control form-control-alternative" value="{{$brands->price}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  
                  <!--  <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" >Profile Photo</label>
                          <input type="file" name="image" class="form-control form-control-alternative" >
                        </div>
                    </div> -->
                  </div>
                  <div class="row">
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  @endsection
 
  