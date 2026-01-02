
<!DOCTYPE html>
<html lang="en">

@include('admin.partcial.css')

<body class="">
 @include('admin.partcial.sidebar')
  <div class="main-content">
    @include('admin.partcial.header')
    @yield('content')
  </div>
  @include('admin.partcial.js')
</body>
</html>