@include('admin.layouts.head')
@if (isset($page) && $page == 1)
@yield('main-section')
@else
@include('admin.layouts.sidebar')
<div class="content-page">
    @yield('main-section')
</div>
@endif
@include('admin.layouts.scripts')
@yield('custom-script')
