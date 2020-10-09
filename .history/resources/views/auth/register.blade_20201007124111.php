<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            body {
                margin: 0;
                                padding: 0;
                                background-color: #17a2b8;
                                height: 100vh;
                              }
                              #login .container #login-row #login-column #login-box {
                                margin-top: 40px;
                                max-width: 600px;
                                height: 450px;
                                border: 1px solid #9C9C9C;
                                background-color: #EAEAEA;
                              }
                              #login .container #login-row #login-column #login-box #login-form {
                                padding: 10px;
                              }
                              #login .container #login-row #login-column #login-box #login-form #register-link {
                                margin-top: -15px;
                                margin-right: 35px;
                              }
                              #login .container #login-row #login-column #login-box #login-form .submit{
                                margin-left: 200px;
                              }
                        </style>
                    </head>
                    <body class="antialiased">
                            
                        <div id="login">
                            <h3 class="text-center text-white pt-5">Register form</h3>
                            <div class="container">
                                <div id="login-row" class="row justify-content-center align-items-center">
                                    <div id="login-column" class="col-md-6">
                                        <div id="login-box" class="col-md-12">
                                            <form method="POST" action="{{ route('register') }}" id="login-form" class="form" >
                                                @csrf
                                                
                                                <div class="form-group">
                                                <x-jet-label value="{{ __('Name') }}" />
                                                <x-jet-input class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                </div>
                                                
                                                <div class="form-group">
                                                <x-jet-label value="{{ __('Email') }}" />
                                                <x-jet-input class="form-control" type="email" name="email" :value="old('email')" required />
                                                </div>
                                                
                                                <div class="form-group">
                                                <x-jet-label value="{{ __('Password') }}" />
                                                <x-jet-input class="form-control" type="password" name="password" required autocomplete="new-password" />
                                                </div>
                                                
                                                <div class="form-group">
                                                <x-jet-label value="{{ __('Confirm Password') }}" />
                                                <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                                </div>
                                                
                                                <div class="text-right">
                                                <a class="text-info" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                                </a>
                                                
                                                <x-jet-button class="btn btn-info submit">
                                                {{ __('Register') }}
                                                </x-jet-button>
                                                </div>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </body>
                </html>
                
               
