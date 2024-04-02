<x-master title="soumestre">
    <head>
        <link rel="stylesheet" href="{{ asset('css/module.css') }}">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            .card {
                max-width: 400px; /* Adjust the width as needed */
            }
            .pricing {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div style="padding-top: 150px;" class="container mb-5">
            <div class="pricing card-deck flex-column flex-md-row mb-3">
                @foreach($soumestreGrades as $soumestreId => $gradeInfo)
                <div class="card card-pricing popular shadow text-center px-3 mb-4">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm"><strong>Semester: {{  $semester->nom }}</strong></span>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            
                            @if(isset($gradeInfo['averageGrade']))
                                <li>Note Moyenne : <span class="bold">{{ $gradeInfo['averageGrade'] }}</span> </li>

                                <li>Validation : <span class="bold">{{ $gradeInfo['averageGrade'] >= 12 ? 'Validé' : 'Non Validé' }}</span></li>
                                <li>Mention : <span class="bold">{{ $gradeInfo['averageGrade'] >= 16 ? 'Très Bien' : ($gradeInfo['averageGrade'] >= 14 ? 'Bien' : ($gradeInfo['averageGrade'] >= 12 ? 'Assez Bien' : 'Passable')) }}</span></li>
                            @else
                                <li>Note Moyenne : <span class="bold">Aucune note disponible</span> </li>
                            @endif

                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</x-master>
