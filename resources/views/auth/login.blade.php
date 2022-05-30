<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Admin</title>
	<link rel="stylesheet" href="style.css">

    <style>
        body { 
        padding: 0;
        margin: auto;
        overflow-x: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: #FBFBFB;
        font-family: 'Poppins', sans-serif;
        }

        h1 {
            font-size: 1.2em;
            padding: 0;
            margin: 0;
        }

        h2 {
            font-size: 1.1em;
            padding: 0;
            margin: 0;
        }

        p {
            font-size: 1em;
            padding: 0;
            margin: 0;
        }

        .container {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(8,1fr);
            gap: 10px;
            margin: 10px;
            box-shadow: 2px 10px 20px rgba(0,0,0,.1);
            border-radius: 20px;
            background-color: white;
            overflow: hidden;
        }

        .container-left {
            grid-column: 1/9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-bottom: 10px;
            padding:10px;
            background-color: #C6CCF8;
        }

        .container-left img {
            width: 100%;
        }


        .container-left h1 {
            text-align: center;
            font-size: 1.5em;
            padding: 10px 0;
        }

        .container-left p {
            text-align: center;
        }



        .container-right {
            grid-column: 1/9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 10px;
                
        }

        .container-right h2 {
            display: none;
        }

        .container-right form {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container-right .input {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 10px 0;
            width: 90%;

        }
        .input label {
            font-size: 1em;
            font-weight: 550;
        }

        .input input {
            width: 90%;
            padding: 10px;
            margin-top: 10px;
            outline: none;
            border: 2px solid rgba(0,0,0,0.5);
            border-radius: 5px;
            transition: .5s;
        }

        .input input:focus {
            border: 2px solid #3B5FF9;
            transition: .5s;
        }

        .container-right button {
            width: 90%;
            height: 40px;
            border: none;
            margin-top: 20px;
            background-color: #5876F8;
            color: white;
            cursor: pointer;
            border-radius: 10px;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            transition: .5s;
        }

        .container-right button:hover {
            transition: .5s;
            background-color: #3B5FF9;
        }

        @media screen and (min-width: 450px) {
            .container {
                width: 400px;
            }
        }

        @media screen and (min-width: 760px) {

            .container {
                width: 100%;
            }

            body {
                height: 100vh;
            }
            .container-left {
                grid-column: 1/6;
                margin-bottom: 0;
                padding: 20px;

            }
            .container-left img {
                width: 85%;
            }

            .container-left .text {
                padding: 10px 0 0;
                width: 350px;
            }

            .container-left h1 {
                font-size: 1.5em;
            }

            .container-right h2 {
            display: block;
        }


            .container-left p {
                font-size: .9em;
            }

            .container-right {
                grid-column: 6/9;
            }
        }


        @media screen and (min-width: 960px) {
            .container {
                width: 900px;
                height: 550px;
            }

            .container-left {
                padding: 0;
            }

            .container-left .text {
                padding: 10px 0 0;
                width: 480px;
            }
        }
    </style>

    </head>
    <body>

    <div class="container">
            <div class="container-left">
            <img src="{{url('assets/img/bg.png')}}" alt="form-login">
            </div>
            <div class="container-right">
            <h2>Admin - SleepTest</h2>
            <br>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="input">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- <div class="input">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="input">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Masuk') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>
</html>
