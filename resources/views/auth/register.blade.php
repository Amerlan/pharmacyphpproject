<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadHome | Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('reg/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('reg/css/style.css')}}">
</head>
<body style="background-image: url({{ asset('reg/images/body-bg.png')}});">

    <div class="main">

        <div class="container">
            <form method="POST" action="{{ route('register') }}" class="appointment-form" id="appointment-form">
              @csrf
                <h2>ReadHome user register</h2>
                <div class="form-group-1">
                  <div class="">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="E-mail" required />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password"/>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm your password"/>

                </div>

                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Registrate" />
                </div>
                <div class="term-service">

                  <h4>  or <a href="{{ route('login') }}">login</a></h4>

                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('reg/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('reg/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
