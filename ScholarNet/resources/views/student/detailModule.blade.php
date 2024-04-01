<x-master title="My Modules">
    <head>
        <link rel="stylesheet" href="{{ asset('css/detailMdule.css') }}">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
<section style="margin-top:25px;" id="tabs" class="project-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Submittion Title</th>
                                            <th>Note</th>
                                            <th>Mention</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach ($assignmentStudent as $exercice)
                                            <tr>
                                                <td><a href="{{ route("exercice.index") }}">{{ $exercice->name }}</a></td>
                                                <td>{{ $exercice->Note }}</td>
                                                <td>{{ $exercice->mention }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</x-master>
