@extends('admin.master')

@section('content')
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                        <a href="#">
                            <img src="{{ asset('client/images/' .$user->image) }}" width="150" height="150" style="border-radius: 50%;">
                        </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
                <div class="text-center">
                    <h3>
                    {{ $user->name }}
                    <span class="font-weight-light">,{{ $user->postal_code }}</span>
                    </h3>
                    <div class="h5 font-weight-300">
                    <i class="ni location_pin mr-2"></i>{{ $user->city }}
                    </div>
                    <div class="h5 mt-4">
                    <i class="ni business_briefcase-24 mr-2"></i>{{ $user->adress }}
                    </div>
                    <!-- Other user profile information here -->
                    <hr class="my-4" />
                    <p>{{ $user->about_me }}</p>
                    <a href="#">Show more</a>
                </div>

            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              @if(!empty(Session::get('success')))
              <div class="alert alert-success">{{Session::get('success')}}</div>
              @endif
              @if(!empty(Session::get('fail')))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
              @endif
             <form action="{{ route('createUser') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" name="user_name" class="form-control form-control-alternative" required="" placeholder="Username">
                      </div>
                      <span class="text-danger">@error ('user_name') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" name="last_name" class="form-control form-control-alternative" required="" placeholder="Last name">
                      </div>
                      <span class="text-danger">@error ('last_name') {{$message}} @enderror</span>
                    </div>
                    <!-- <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative" required="" placeholder="Enter Email">
                      </div>
                    </div> -->
                     <!-- <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">password</label>
                        <input type="password" name="password" id="input-email" class="form-control form-control-alternative" required="" placeholder="password in">
                      </div>
                    </div> -->
                  </div>
                  <!-- <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" name="name" id="input-first-name" class="form-control form-control-alternative" required="" placeholder="First name">
                      </div>
                    </div>
                  </div> -->
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" name="adress" class="form-control form-control-alternative" required="" placeholder="Home Address" type="text">
                      </div>
                      <span class="text-danger">@error ('adress') {{$message}} @enderror</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" name="city" class="form-control form-control-alternative" required="" placeholder="City">
                      </div>
                      <span class="text-danger">@error ('city') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" name="country" class="form-control form-control-alternative" required="" placeholder="Country">
                      </div>
                      <span class="text-danger">@error ('country') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" name="postal_code" class="form-control form-control-alternative" required="" placeholder="Postal code">
                      </div>
                      <span class="text-danger">@error ('postal_code') {{$message}} @enderror</span>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label>About Me</label>
                    <textarea rows="4" class="form-control form-control-alternative" name="about_me" required="" placeholder="A few words about you ..."></textarea>
                  </div>
                  <span class="text-danger">@error ('about_me') {{$message}} @enderror</span>
                </div>
                <div class="col-lg-8">
                  <div class="form-group">
                    <label class="form-control-label" for="input-image">Profile Photo</label>
                    <input type="file" id="input-country" name="image[]" class="form-control form-control-alternative" multiple="">
                  </div>
                  {{-- <span class="text-danger">@error ('image') {{$message}} @enderror</span> --}}
                </div>
                <div>
                  <button type="submit" name="submit" class="btn btn-dark">Submit</button>
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
 
  