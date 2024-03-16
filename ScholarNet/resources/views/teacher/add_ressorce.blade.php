<x-master title="Add Resource">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Resource</title>
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
                <form action="{{ route('store_resource') }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputTitle" class="formbold-form-label">Title</label>
                        <input type="text" class="formbold-form-input" id="exampleInputTitle" name="titre" value="{{ old('titre')}}" >
                        @error('titre')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescription" class="formbold-form-label">Description</label>
                        <input type="text" class="formbold-form-input" id="exampleInputDescription" name="description" value="{{ old('description')}}" >
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputFile" class="formbold-form-label">File</label>
                        <input type="file" class="formbold-form-input" id="exampleInputFile" name="fichier" >
                        @error('fichier')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputModule" class="formbold-form-label">Module</label>
                        <select class="formbold-form-input" name="id_module">
                            <option value="">Select Module</option>
                            @foreach($modules as $module)
                                <option value="{{ $module->id }}">{{ $module->nom }}</option>
                            @endforeach
                        </select>
                        @error('id_module')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTeacher" class="formbold-form-label">Teacher</label>
                        <select class="formbold-form-input" name="id_teacher">
                            <option value="">Select Teacher</option>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                            @endforeach
                        </select>
                        @error('id_teacher')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn-primary">Add Resource</button>
                </form>
            </div>
        </div>

    </body>
    </html>
</x-master>
