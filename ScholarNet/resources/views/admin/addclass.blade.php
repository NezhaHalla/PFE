<x-master title="Add Class">
    <!-- Move the style block here -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: "Inter", sans-serif;
            /* Adjust the padding-top value based on the height of your navigation bar */
            padding-top: 70px; /* Adjust based on the height of your navigation bar */
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            max-width: 550px;
            width: 100%;
            background: #f9f9f9; /* Changed background color */
            border-radius: 10px; /* Added border-radius for better appearance */
            padding: 30px; /* Increased padding for spacing */
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); /* Added box shadow for depth */
        }

        .formbold-input-flex {
            display: flex;
            gap: 20px;
            margin-bottom: 20px; /* Increased margin for spacing */
        }

        .formbold-input-flex > div {
            flex: 1; /* Adjusted width for responsiveness */
        }

        .formbold-input-radio-wrapper {
            margin-bottom: 28px;
        }

        .formbold-radio-flex {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .formbold-radio-label {
            font-size: 14px;
            line-height: 24px;
            color: #07074D;
            position: relative;
            padding-left: 25px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .formbold-input-radio {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .formbold-radio-checkmark {
            position: absolute;
            top: -1px;
            left: 0;
            height: 18px;
            width: 18px;
            background-color: #FFFFFF;
            border: 1px solid #DDE3EC;
            border-radius: 50%;
        }

        .formbold-radio-label .formbold-input-radio:checked ~ .formbold-radio-checkmark {
            background-color: #6A64F1;
        }

        .formbold-radio-checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .formbold-radio-label .formbold-input-radio:checked ~ .formbold-radio-checkmark:after {
            display: block;
        }

        .formbold-radio-label .formbold-radio-checkmark:after {
            top: 50%;
            left: 50%;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #FFFFFF;
            transform: translate(-50%, -50%);
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

        .formbold-btn {
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

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }
    </style>

    <div class="content-container">
        <div style="padding:20px;">
            <div class="formbold-main-wrapper">
                <div class="formbold-form-wrapper">
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

                        <button type="submit" class="formbold-btn">Add Class</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master>
