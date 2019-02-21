
@include('admin.layouts.partials._header')
@include('admin.layouts.partials._sidebar')

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

    @include('admin.layouts.partials._navbar')
    
    @yield('content')

    </div>
    <!-- End of Main Content -->
    
@include('admin.layouts.partials._footer')
