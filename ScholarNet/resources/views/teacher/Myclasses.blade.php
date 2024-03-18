<x-master title="Teacher Classes">
    <style>
        .container {
            margin-top: 50px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #f7f7f7; /* Blue background for header */
            color: #000000; /* White text color */
            border-radius: 15px 15px 0 0;
            padding: 20px; /* Increased padding for header */
            text-align: center; /* Center align text */
        }

        .card-body {
            padding: 20px;
        }

        .dropdown-menu {
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }

        .dropdown-menu li {
            list-style: none;
            margin-bottom: 5px;
        }

        .btn-primary {
            background-color: #f5f9fd;
            color: #080808;
            border: none;
            width: 100%;
            text-align: left;
            border-radius: 0; /* Remove border radius */
        }

        .dropdown-toggle::after {
            display: none;
        }
    </style>

    <div class="container">
        <div class="row">
            @foreach ($classes as $class)
                <div class="col-md-4"> <!-- Decreased width by changing col-md-6 to col-md-4 -->
                    <div class="card">
                        <div class="card-header">
                            <h1>Class Information</h1>
                            <h5 class="card-title">{{ $class->Name }}</h5>
                            <p class="card-text">Branch: {{ $class->Branch }}</p>
                            <p class="card-text">Level: {{ $class->Level }}</p>
                            <p class="card-text">Year: {{ $class->Year }}</p>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton{{ $class->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                Show Students
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $class->id }}">
                                @if (isset($students[$class->id]))
                                    @foreach ($students[$class->id] as $student)
                                        <li> <a href="{{ route("showProfile",$student->id) }}">{{ $student->name }}</a></li>
                                    @endforeach
                                @else
                                    <li>No students found for this class</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            @empty($classes)
                <div class="col-md-12">
                    <p>No classes found for this teacher</p>
                </div>
            @endempty
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
</x-master>
