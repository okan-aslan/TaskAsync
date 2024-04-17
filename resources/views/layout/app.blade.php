@include('layout.header')

@include('layout.navbar')

<div class="mt-32 container mx-auto flex justify-center">
    @yield('content')
</div>

@include('layout.footer')
