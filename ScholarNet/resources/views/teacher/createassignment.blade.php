<x-master title="Add Assignment">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Assignment</title>
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
                max-width: 600px; /* Increase the max-width */
                width: 100%;
                background: #f9f9f9;
                border-radius: 10px;
                padding: 30px;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            }

            .formbold-form-input {
        width: calc(100% - 15px); /* Adjust the width to show two inputs in a line */
        padding: 13px 22px;
        border-radius: 5px;
        border: 1px solid #DDE3EC;
        background: #FFFFFF;
        font-weight: 500;
        font-size: 16px;
        color: #07074D;
        outline: none;
        resize: none;
        margin-right: 30px; /* Add margin between inputs */
    }

            .formbold-form-label {
                color: #07074D;
                font-size: 14px;
                line-height: 24px;
                margin-bottom: 10px;
                width:100px;
                padding-top:10px;
            }

            .formbold-form-group {
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
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

            @media screen and (max-width: 768px) {
                .formbold-form-input {
                    width: 100%;
                    margin-right: 0;
                }
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
                <form action="{{ route('assignmentsstore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="titre" class="formbold-form-label">Title</label>
                        <input type="text" class="formbold-form-input" id="titre" name="titre" value="{{ old('titre') }}" >
                        @error('titre')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="formbold-form-label">Description</label>
                        <textarea class="formbold-form-input" id="description" name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="role" class="formbold-form-label">Role</label>
                        <select class="formbold-form-input" name="role">
                            <option value="">Select Role</option>
                            <option value="TP" {{ old('role') == 'TP' ? 'selected' : '' }}>TP</option>
                            <option value="EXAM" {{ old('role') == 'EXAM' ? 'selected' : '' }}>EXAM</option>
                            <option value="Announce" {{ old('role') == 'Announce' ? 'selected' : '' }}>Announce</option>

                        </select>
                        @error('role')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="fichier" class="formbold-form-label">File</label>
                        <input type="file" class="formbold-form-input" id="fichier" name="fichier" >
                        @error('fichier')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deadline" class="formbold-form-label">Deadline</label>
                        <input type="datetime-local" class="formbold-form-input" id="deadline" name="deadline" value="{{ old('deadline') }}" >
                        @error('deadline')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="module_id" class="formbold-form-label">Module</label>
                        <select class="formbold-form-input" name="module_id">
                            <option value="">Select Module</option>
                            @foreach($modules as $module)
                                <option value="{{ $module->id }}" {{ old('module_id') == $module->id ? 'selected' : '' }}>{{ $module->nom }}</option>
                            @endforeach
                        </select>
                        @error('module_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn-primary">Add Assignment</button>
                </form>
            </div>
        </div>

    </body>
    </html>
</x-master>
