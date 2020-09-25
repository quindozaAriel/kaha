<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>POS - System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: Minimalistic;
            src: url({{asset('fonts/Minimalistic.otf')}});
        }
    </style>
    <style>
        body {
            font-family: Nunito;
        }
    </style>
</head>

<body class="antialiased">
    <div id="app">
        <login></login>
    </div>

    <script src="http://localhost:8080/js/app.js"></script>
</body>

</html>
{{-- Icons made by <a href="http://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> --}}