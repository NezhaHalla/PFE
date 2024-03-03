<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="cared">
        <div class="card-body">
            @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="{{ asset('image/logo.jpeg') }}" style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">We are ScholarNet</h4>
                  </div>

                  <form action=" {{ route('login')}} " method="POST">
                    @csrf
                    <p>Please login to your account</p>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Username</label>
                      <input type="email" id="form2Example11" class="form-control" name="email"
                        placeholder=" email address" />

                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example22" >Password</label>
                      <input type="password" id="form2Example22" class="form-control" name="password" />

                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-primary btn-md btn-block fa-lg gradient-custom-2 mb-4"
                         type="submit">Log in</button>

                        <br>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>



                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<style>
.gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #03058b, #3115d1, #4851d4, #7a92fc);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #0a0c85, #270dbb, #5093f7, #a0ade9);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>

</body>
</html>
