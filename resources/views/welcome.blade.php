<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <title> Тестовое задание </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<main id="app">
    <house-list></house-list>
</main>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
