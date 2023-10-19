<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/image/logo-removebg-preview.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MSU-IIT NMPC</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&family=Raleway&display=swap');

        :root{
            --white-color: #fff;
            --dark-color: #222;
            --section-bg-color: #202834;
            --navigation-item-hover-color: #3b5378;

            --text-shadow: 0 5px 25px rgba(0,0,0,0.1);
            --box-shadow: 0 5px 25px rgb(0 0 0 / 20%);

            --scroll-bar-color: #fff;
            --scroll-thumb-color: #282f4e;
            --scroll-thumb-hover-color: #454f6b;

            --black: #444;
            --light-color: #666;
            --border: 0.1rem solid rgba(0,0,0,.1);
            --border-hover: 0.1rem solid var(--black);
            --box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
            outline: none;
            list-style: none;
            border:  none;
            text-decoration: none;
            transition: all 0.2s linear;
            transition:width none;
        }

        body{
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/image/white-abstract-background-2pa3nsnx8sj91zs3.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .login{
            height: 415px;
            width: 350px;
            margin-top: 5%;
            margin-bottom: auto;
            background: white;
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;
        }

        .logo-container{
            position: absolute;
            height: 150px;
            width: 150px;
            top: -75px;
            border-radius: 50%;
            background: white;
            padding: 10px;
            text-align: center;
            }
            .logo{
            height: 130px;
            width: 130px;
            border-radius: 50%;
        }

        .greetings{
            position: relative;
            top: 10%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .greetings h2{
            font-size: 1.5em;
            font-weight: bold;
            color: black;
        }
        .greetings p{
            width: 80%;
            font-size: 0.69rem;
            color: black;
            text-align: center;
            font-weight: 600;
        }

        .form{ margin-top: 65px; }

        .input-group-text{
            background: black !important;
            color: white !important;
            border: 0 !important;
            border-radius: 0.25rem 0 0 0.25rem !important;
        }
        .input_user:focus,
        .input_pass:focus{
            box-shadow: none !important;
            outline: none !important;
        }
        .input_user,
        .input_pass{
            font-size: 1rem;
            font-weight: bolder;
        }

        .note{
            font-size: 0.55rem;
            font-weight: 600;
            margin-bottom: 10%;
        }

        .login_container{
            top: 1000%;
            padding: 0;
        }
        .login_btn{
            text-transform: uppercase;
            width: 100%;
            background: black;
            font-weight: bold;
            color: white;
            transition: 0.55s ease;
        }
        .login_btn:hover{
            background: #8a0303;
            color: white;
        }
        .login_btn:focus{
            box-shadow: none !important;
            outline: 0px !important;
        }
    </style>
</head>

<body>
    <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="login">
        <div class="d-flex justify-content-center">
          <div class="logo-container">
            <img src="{{URL::asset('image/logo-removebg-preview.png')}}" class="logo">
          </div>
        </div>

        <div class="greetings">
          <h2>Welcome Back!</h2>
          <p>You're about to sign in to the administration side of the  MSU-IIT NMPC's appointment subsystem</p>
        </div>

        <div class="d-flex justify-content-center form">
          <form method="POST" action="{{ route('login') }}">
                @csrf

                @error('email')
                    <span style="font-size: 10px; font-weight: bolder; color:#8a0303; padding-bottom: 30px; text-transform: uppercase;">{{ $message }}</span>
                @enderror

                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text" style="padding: 12px;">
                        <img width="14" height="14" src="https://img.icons8.com/fluency-systems-filled/14/FFFFFF/user.png"/>
                        </span>
                    </div>
                    <input style="color: #8a0303;" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="form-control input_user" placeholder="enter your username" required="required">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text" style="padding: 12px;">
                        <img width="14" height="14" src="https://img.icons8.com/ios-glyphs/14/FFFFFF/lock--v1.png" alt="lock--v1"/>
                    </div>
                    <input style="color: #8a0303;" id="password" type="password" name="password" required autocomplete="current-password" class="form-control input_pass" placeholder="enter your password" required="required">
                    @error('password')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>





                <div class="form-group">
                    <div class="note">
                        <p>Note: Your default username and password were already given to you.</p>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-3 login_container">
                    <input type="submit" id="login" name="login" value="Sign In" class="btn login_btn">
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- <body>

    <header>
        Include your navigation bar here
    </header>

    <div class="container">
        <div class="content">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    @error('email')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span class="ml-2">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-blue-600 hover:text-blue-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <button type="submit" class="bg-blue-500 text-white rounded-md p-2 ml-3">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body> -->
</html>
