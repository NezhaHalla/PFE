<x-master title="My Submitted Assignments">
    <head>
        <link rel="stylesheet" href="{{ asset('css/listeass.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://bbbootstrap.com/snippets/bootstrap-5-profile-card-animation-74461039">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
<script>
    $(document).ready(function() {
        var example1 = document.getElementById('sortable');
        new Sortable(example1, {
            animation: 150,
            ghostClass: 'blue-background-class'
        });
    });
</script>
<div class="page-content page-container" id="page-content">
    <div class="padding" style="margin-top: 100px">
        <div class="row">
            <div class="col-sm-8">
                <div style=" width: 1450px;" class="container-fluid d-flex justify-content-center">
                    <div style=" width: 1500px;" class="list list-row card" id="sortable" data-sortable-id="0" aria-dropeffect="move">
                        @foreach ($exercices as $exercice)
                            
                            <div class="list-item" data-id="9" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false">
                                <div><a href="#" data-abc="true"><span class="w-40 avatar gd-info"><img src="{{ asset('storage/'.$exercice->student->image) }}" alt="."></span></a></div>
                                <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">{{ $exercice->student->name }}</a>
                                    <div class="item-except text-muted text-sm h-1x">{{ $exercice->assignment->role }} | {{ $exercice->assignment->titre }}</div><i class="fas fa-file-alt"> File</i>

                                </div>
                                <div class="no-wrap">
                                    <div class="item-date text-muted text-sm d-none d-md-block">{{ $exercice->createdAt }}</div>
                                </div>
                                <div>
                                    <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg> </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-light" role="menu"><a class="dropdown-item download" data-abc="true" href="{{ route("exercice.download",$exercice->id) }}">Download </a>
                                            <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true" href="{{ route("exercice.destroy",$exercice->id) }}">Delete item</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
    </body>
    </html>
</x-master>