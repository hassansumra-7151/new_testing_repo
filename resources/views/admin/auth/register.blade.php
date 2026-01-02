<!DOCTYPE html>
<html lang="en">
@include('admin.auth.partials.css')
<body class="bg-default">
  <div class="main-content">
  @include('admin.auth.partials.header')
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
           <!--    <div class="text-center">
                <a href="#" class="btn btn-neutral btn-icon mr-4">
                  <span class="btn-inner--icon"><img src="../assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div> -->
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Or sign up with credentials</small>
              </div>
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <x-text-input class="form-control" placeholder="Name" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                  </div>
                  <x-input-error :messages="$errors->get('name')" class="mt-2" style="color: red;" />
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <x-text-input id="email" placeholder="Email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                  </div>
                  <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red;" />
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="new-password" />
                  </div>
                  <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red;" />
                </div>

                 <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                     <x-text-input id="password_confirmation" class="form-control"
                            type="password"
                             placeholder="Confirm Password"
                            name="password_confirmation" required autocomplete="new-password" />
                  </div>
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: red;" />
                </div>
                <!--  <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div> -->
                <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div>
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                      </label>
                    </div>
                  </div>
                </div>
                 
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Create account</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-6 text-right">
            <div class="text-light">Already Register <a href="{{ route('login') }}" class="text-light" style="color: white"><u>Login Here !</u></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('admin.auth.partials.footer')
  </div>
  @include('admin.auth.partials.js')
</body>
</html>