<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <script src="{{asset('js/fontawesome.js')}}" defer></script> <!--font icons-->

   <!-- Styles -->
   <link rel="shortcut icon" href="assets/images/logo-122x122.png" type="image/x-icon">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/login.css') }}" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
   <style>
    #password
    {
      margin-bottom: 0% !important;
    }
  </style>
  <title>Admin</title>
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="col-md-6 m-auto">

      <div class="card login-card d-flex align-items-center">
            <div class="card-body ">
              <div class="brand-wrapper">
                <a href="/">
                  <h2> <!--<img src="assets/images/logo-122x122.png" alt="logo" class="logo">-->
                    Roviga</h2>
                </a>
              </div>
              @if ($message=Session::get('alert'))
              <div class="alert alert-danger my-2" role="alert">
                <strong> {{$message}} </strong>
               </div>  
              @endif
              <form action="" method="POST" autocomplete="off">
                @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address"value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                <div class="form-group mb-4">
                  <label for="password">Password</label>
                  <div class="input-group">
                  <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="***********" required autocomplete="current-password">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" onclick="showpassword()"><i class="fas fa-eye" id="eye"></i></button>
                  </div>
                  </div>
                </div>
                  
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Log In">
                </form>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-password-link">Forgot password?</a>

                @endif
            </div>
        </div>
      </div>
    </div>
    </div>
  </main>
</body>
<script src="js/register.js"></script>
   <script>
        function showpassword() {
        let x = document.getElementById("password");
        let y = document.getElementById("eye");
      if (x.type === "password") {
      x.type = "text";
      } else {
      x.type = "password";
      y.setAttribute('class','fas fa-eye-slash')
      }
      }
  </script>
</html>
