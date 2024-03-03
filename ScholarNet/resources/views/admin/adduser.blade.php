<x-master title="adduser">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>

            .form-container {
                max-width: 500px;
                margin: 3% auto;
                padding: 20px;
                border: 2px solid #ccc;
                border-radius: 10px;
                background-color: #f9f9f9;
            }
            h1 {
                text-align: center;
            }
            .form-label {
                font-weight: bold;
            }
            .form-control {
                width: 100%;
                padding: 8px;
                margin-top: 5px;
                margin-bottom: 10px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            .btn-primary {
                background-color: #007bff;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <h1>Add User</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="form-container">

            <form action="{{ route('adduser') }}" method="POST" enctype='multipart/form-data'>
                @csrf
               <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name </label>
    <input type="text" class="form-control" id="exampleInputname" name="name" value="{{ old('name')}}" >
    @error('name')
        {{ $message }}
    @enderror
</div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ old('email')}}" >
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name='password' >
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" name='gender'>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" name='role'>
                        <option value="">Select Role</option>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                    </select>
                    @error('role')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Date de naissance</label>
                    <input type="date" class="form-control" name="DateDeNaissance">
                    @error('DateDeNaissance')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" >
                    @error('image')
                        {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <br>

            </form>
        </div>

    </body>
    </html>
</x-master>
