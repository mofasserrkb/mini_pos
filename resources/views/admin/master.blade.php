@include('admin.header');
    <!-- Wrapper Start -->
    <div class="wrapper">
@include('admin.sidebar');
@include('admin.navbar');
@yield('content')
</div>
@include('admin.footer');
