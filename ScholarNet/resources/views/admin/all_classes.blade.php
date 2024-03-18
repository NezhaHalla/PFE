<x-master title="AllClass">
    <div class="card-container">
        @foreach($classes as $class)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $class->Name }}</h5>
                    <p class="card-text"><strong>Branch:</strong> {{ $class->Branch }}</p>
                    <p class="card-text"><strong>Level:</strong> {{ $class->Level }}</p>
                    <p class="card-text"><strong>Year:</strong> {{ $class->Year }}</p>
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
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-bottom: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: #333;
        }
        .card-text {
            margin-bottom: 10px;
            color: #666;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</x-master>
