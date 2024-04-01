<x-master title="My Modules">
    <head>
        <link rel="stylesheet" href="{{ asset('css/module.css') }}">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            .card {
                max-width: 400px; 
            }
        </style>
    </head>
    <body> 

        <div style="padding-top: 150px;" class="container mb-5">
            <div class="pricing card-deck flex-column flex-md-row mb-3">
                @foreach ($modules as $module)
                    <div class="card card-pricing popular shadow text-center px-3 mb-4" >
                        <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">{{ $module->name }}</span>
                        <div class="card-body pt-0">
                            <ul class="list-unstyled mb-4">
                                <li>Note : <span class="bold">{{ $module->Note }}</span></li>
                                <li>Result : <span class="bold">{{ $module->mention }}</span></li>
                            </ul>
                            <button type="button" class="btn btn-outline-secondary mb-3">
                                <a style="text-decoration:none; color:rgb(0, 0, 0);" href="{{route("module.detail",$module->idmodule)}}">
                                    See Details
                                </a>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</x-master>
