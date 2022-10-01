<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồ Án Cơ Sở 2</title>
    @include('libraries')
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reader/style.css') }}">
    @stack('css')
</head>

<body>
    @include('layouts.reader.header')
    @include('layouts.reader.login_form')
    <section id="side-middle">
        <div class="px-0 mx-0">
            <div class="row me-0">
                @yield('content')
            </div>
        </div>
    </section>
    @include('layouts.reader.contact_box')
    <div class="notification">
    </div>
    @include('layouts.reader.footer')
</body>
{{-- 
<script type="module" src="{{ asset('js/vendor.min.js') }}"></script>
<script type="module" src="{{ asset('js/app.min.js') }}"></script>
<script type="module" src="{{ asset('js/toaster.js') }}"></script> --}}
<script type="module" src="{{ asset('js/reader/app.js') }}"></script>
@stack('js')

</html>
