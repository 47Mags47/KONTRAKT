<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- ### Заголовок страницы
    ################################################## --}}
    <title>{{ env('APP_NAME') }} - @yield('page-name')</title>

    {{-- ### Подключаем скрипты
    ################################################## --}}
    @vite('resources/js/app.js')
    @stack('scripts')

    {{-- ### Подключаем стили
    ################################################## --}}
    @vite('resources/sass/app.sass')
    @stack('styles')
</head>

<body>
    @include('includes/header')
    <section class="content">
        @yield('content')
    </section>
    {{-- HACK Добавить подвал  --}}
</body>

</html>
