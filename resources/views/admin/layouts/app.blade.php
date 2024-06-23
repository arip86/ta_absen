@include('admin.layouts.sidebar')
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

@include('admin.layouts.nav')

@yield('content')


</div>

@include('admin.layouts.footer')