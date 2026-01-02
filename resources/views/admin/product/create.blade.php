@extends('admin.master')

@section('content')
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-body">
                @if(!empty(Session::get('success')))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(!empty(Session::get('fail')))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
              <form action="{{ route('create_product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Bar Code<span style="color: red;">*</span></label>
                        <input type="text" required="" name="bar_code" class="form-control form-control-alternative">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Product Code<span style="color: red;">*</span></label>
                        <input type="text" name="product_code" required="" class="form-control form-control-alternative">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Product Name</label>
                        <input type="text" name="product_name" required="" class="form-control form-control-alternative">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="brand">Brand</label>
                          <select name="brand_id" id="brand" class="form-control">
                              <option value="">Select Brand</option>
                              @foreach($brands as $brand)
                                  <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category_id" id="category" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Price<span style="color: red;">*</span></label>
                        <input type="text" name="price" required="" class="form-control form-control-alternative">
                      </div>
                    </div>
                     <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Minimum Stock Level<span style="color: red;">*</span></label>
                        <input type="text" name="stock_level" required="" class="form-control form-control-alternative">
                      </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" >Profile Photo</label>
                          <input type="file" name="image" class="form-control form-control-alternative" >
                        </div>
                    </div>
                  </div>
                <div class="col-sm-5">
                  <label class="switch">
                      <input type="checkbox" id="status-toggle" name="status">
                      <span class="slider round"></span>
                  </label>
                  <input type="hidden" id="status-input" name="status-input">
              </div>
              
                <br><br>
                  <div class="row">
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark">Submit</button>
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
 
  