<x-master title="Assignment">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('{{ asset('image/Assignment.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            padding-top:100px;
        }

        .card {
            background-color: #ffffff;
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .card-img {
            width: 150px;
            height: auto;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            border-radius: 10px;
        }

            .titre {
        color: #0d0d0d;
        font-size: 40px;
        font-family: Georgia;
        
    }
    </style>
</head>
<body>
@include('partials.flashbag')
<div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-6">
            <div class="card rounded-3 shadow-lg p-5">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('studentsubass') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Fichier</label>
                        <input type="file" class="form-control" id="password" name="password" >
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>

</x-master>