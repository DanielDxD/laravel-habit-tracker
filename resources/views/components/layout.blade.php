<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-slate-50 text-slate-900 font-sans antialiased min-h-screen flex flex-col relative selection:bg-indigo-500 selection:text-white">
    <!-- Decorative background elements -->
    <div
        class="fixed inset-0 -z-10 bg-[radial-gradient(ellipse_at_top_right,var(--tw-gradient-stops))] from-indigo-100 via-slate-50 to-slate-50">
    </div>
    <div
        class="fixed top-0 left-0 -z-10 w-full h-full bg-[url('https://laravel.com/assets/img/welcome/background.svg')] bg-no-repeat bg-cover bg-center opacity-[0.03]">
    </div>

    <x-header />

    <div class="grow">
        {{ $slot }}
    </div>

    <x-footer />
</body>

</html>
