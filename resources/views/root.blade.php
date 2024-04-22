<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-/LLbNyQx1ck3gGA6B+BWu05l7IOWCYE+6rYnau+kmmGkS9bY0cwVstMLxUmXz2b3ySP2VqnjX/XdHjrM3GdN3w==" crossorigin="anonymous">

        @spladeHead
        @vite('resources/js/app.js')

    </head>
    <body class="font-sans antialiased">
        @splade
    </body>
</html>
