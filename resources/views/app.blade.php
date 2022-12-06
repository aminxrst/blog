<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="آنیوان مارکت فروشگاه اینترنتی اسباب بازی و بازی فکری انیوان مارکت کودک، نوجوان و بزرگسال لوازم تحریر فانتزی، کتاب روانشناسی، انگیزشی به همراه تخفیف ویژه، انیوان مارکت">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-kalameh">
        @inertia
    </body>
</html>
