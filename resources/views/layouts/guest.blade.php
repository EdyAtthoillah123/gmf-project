<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
   @vite('resources/css/app.css')

   
</head>
 <style>
        body {
            background-color: #065F46;
            background-image: url('{{ asset('images/footer/footer.png') }}');
            background-size:cover;
            background-position: center;
            background-repeat: repeat;
        }
    </style>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-dgreen-100">
        <div class="text-center mb-6">
            <a href="/" wire:navigate>
                <img src="{{ asset('images/login/logo-login.png') }}" class="w-20 h-20 mx-auto">
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md  overflow-hidden sm:rounded-2xl">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
