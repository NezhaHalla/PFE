<x-master title="AllClass">
    <div class="card-container">
        @foreach($classes as $class)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $class->Name }}</h5>
                    <p class="card-text"><strong>Branch:</strong> {{ $class->Branch }}</p>
                    <p class="card-text"><strong>Level:</strong> {{ $class->Level }}</p>
                    <p class="card-text"><strong>Year:</strong> {{ $class->Year }}</p>
                    <p class="card-text"><strong>Number of Students:</strong> {{ $class->num_students }}</p>
                    <a href="{{ route('showAllStudents', ['class_id' => $class->id]) }}" class="btn btn-primary">Show Students</a>
                </div>
            </div>
        @endforeach
    </div>
    <style>
       body {
            font-family: Roboto, sans-serif;
           min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #EFEFEF;

        }

        .card-container {
            display: flex;
             gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .card {
            background: #fff;
            border-radius: 4px;
            box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.5);
            width: 400px; /* Adjust the width as needed */
            height: 250px;
            display: flex;
            flex-direction: row;
            border-radius: 25px;
            position: relative;
            overflow: hidden;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: #333;
            text-align: center;

        }
        .card-text {
            margin-bottom: 10px;
            color: #666;
        }
        .btn-primary {
           
            background-color: #4682B4;
            padding: 6px 12px;
            border-radius: 6px;

        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</x-master>
