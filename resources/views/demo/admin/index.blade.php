<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('common.cpbd-icon')
    <title>Demo Admin</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/demo/admin/app.css') }}">
</head>
<body>
    <div id="app">
        <div v-if="preloader" class="loader">
            <div class="loader-icon">Loading...</div>
        </div>
        <index-component></index-component>
        {{-- <index-component authuser="{{ Auth::user() }}" permission="{{ $roles }}"></index-component> --}}
    </div>
    <script src="{{ mix('js/demo/admin/app.js') }}"></script>
</body>

</html>
