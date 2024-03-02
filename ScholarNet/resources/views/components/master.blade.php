<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ScolarNet | {{ $title }}</title>
</head>
<body>
    <div style="position: absolute; top:0px; width:100%;">
        @include('partials.bar')
    </div>

    <div style="margin-top: 100px; margin-bottom: 50px;">
        {{ $slot }}
    </div>

    <footer style="position: relative; bottom: 0; width: 100%;">
        @include('partials.footer')
    </footer>

</body>
</html>
