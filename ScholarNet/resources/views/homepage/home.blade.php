<x-master title="Home">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
        </style>
    </head>
    <body>
        <x-announcement :announcement="$announcement"/>
        <x-post :publication="$publication"/>
    </body>
    </html>
</x-master>
