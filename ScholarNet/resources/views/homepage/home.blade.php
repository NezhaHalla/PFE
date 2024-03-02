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
        <div style="position: absolute; top:230px; width:100%;"><x-announcement :announcement="$announcement"/> </div>

        <div style="position:absolute; top:800px"><x-post :publication="$publication"/></div>
    </body>
    </html>
</x-master>
