<x-master title="Modify Password">
    <!DOCTYPE html>
<html lang="en">

<head>
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="{{ asset('css/modifypassword.css') }}" rel="stylesheet">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading" style="background: url('{{ asset('storage/images/pass.jpg') }}') top left/cover no-repeat;width: 29.1%;display: table-cell;" ></div>
                <div class="card-body">
                    <h2 class="title">Modify Password</h2>
                    <form method="POST" action="{{ route('password.update')}}">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Current Password" name="Current_password">
                        </div>
                        @error('Current_password')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="New Password" name="New_password">
                        </div>
                        @error('New_password')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Confirm New Password" name="New_password_confirmation">
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Sumbit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
</x-master>