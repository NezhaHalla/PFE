<x-master title="adduser">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>

            .formbold-main-wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 48px;
            }

            .form-container {

                margin: 80px auto;
                max-width: 550px;
                width: 100%;
                background: #f9f9f9;
                border-radius: 10px;
                padding: 30px;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            }

            .formbold-form-input {
                width: 100%;
                padding: 13px 22px;
                border-radius: 5px;
                border: 1px solid #DDE3EC;
                background: #FFFFFF;
                font-weight: 500;
                font-size: 16px;
                color: #07074D;
                outline: none;
                resize: none;
            }
            .formbold-form-input::placeholder {
                color: #536387;
            }
            .formbold-form-input:focus {
                border-color: #6a64f1;
                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
            }
            .formbold-form-label {
                color: #07074D;
                font-size: 14px;
                line-height: 24px;
                display: block;
                margin-bottom: 10px;
            }

            .btn-primary {
                text-align: center;
                width: 100%;
                font-size: 16px;
                border-radius: 5px;
                padding: 14px 25px;
                border: none;
                font-weight: 500;
                background-color: #6A64F1;
                color: white;
                cursor: pointer;
                margin-top: 25px;
            }
            .btn-primary:hover {
                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
            }

        </style>
    </head>
    <body>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="formbold-main-wrapper">
            <div class="form-container">
                <form action="{{ route('adduser') }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputname" class="formbold-form-label">Name </label>
                        <input type="text" class="formbold-form-input" id="exampleInputname" name="name" value="{{ old('name')}}" >
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="formbold-form-label">Email </label>
                        <input type="email" class="formbold-form-input" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ old('email')}}" >
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="formbold-form-label">Password</label>
                        <input type="password" class="formbold-form-input" id="exampleInputPassword1" name='password' >
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="formbold-form-label">Gender</label>
                        <select class="formbold-form-input" name='gender'>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('gender')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="role" class="formbold-form-label">Role</label>
                        <select class="formbold-form-input" name='role'>
                            <option value="">Select Role</option>
                            <option value="Student">Student</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Admin">Admin</option>
                        </select>
                        @error('role')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="formbold-form-label">Date de naissance</label>
                        <input type="date" class="formbold-form-input" name="DateDeNaissance">
                        @error('DateDeNaissance')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="formbold-form-label">Class</label>
                        <select class="formbold-form-input" name="class_id">
                            <option value="">Select Class</option>
                            @foreach($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->Name }}</option>
                            @endforeach
                        </select>
                        @error('class_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="formbold-form-label">Soumestre</label>
                        <select class="formbold-form-input" name="soumestre_id">
                            <option value="">Select Soumestre</option>
                            @foreach($Soumestres as $Soumestre)
                                <option value="{{ $Soumestre->id }}">{{ $Soumestre->nom }}</option>
                            @endforeach
                        </select>
                        @error('soumestre_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="formbold-form-label">Image</label>
                        <input type="file" class="formbold-form-input" name="image" >
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn-primary">Add</button>
                </form>
            </div>
        </div>

    </body>
    </html>
</x-master>
