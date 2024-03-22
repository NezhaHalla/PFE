<x-master title="Add Class">


        <div class="formbold-main-wrapper">
            <div class="form-container">
                <form action="{{ route('class.store') }}" method="POST">
                    @csrf
                    <div class="formbold-input-flex">
                        <div>
                            <label for="filier" class="formbold-form-label">Branch</label>
                            <input type="text" name="Branch" id="filier" class="formbold-form-input" />
                            @error('Branch')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="niveau" class="formbold-form-label">Level</label>
                            <input type="text" name="Level" id="niveau" class="formbold-form-input" />
                            @error('Level')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="annee" class="formbold-form-label">Year</label>
                        <input type="text" name="Year" id="annee" class="formbold-form-input" />
                        @error('Year')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="nom" class="formbold-form-label">Name</label>
                        <input type="text" name="Name" id="nom" class="formbold-form-input" />
                        @error('Name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn-primary">Add Class</button>
                </form>
            </div>
        </div>



    <style>

.formbold-main-wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 48px;
            }

            .form-container {
                margin: 80px auto;
                max-width: 700px; /* Increase the max-width */
                width: 100%;
                background: #f9f9f9;
                border-radius: 10px;
                padding: 30px;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            }

            .formbold-form-input {
                width: calc(100% - 30px); /* Adjust the width to show two inputs in a line */
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

</x-master>
