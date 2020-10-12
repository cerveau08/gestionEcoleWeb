<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Name') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4"><!DOCTYPE html>
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
                                margin-top: 120px;
                                max-width: 600px;
                                height: 350px;
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
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                            </div>
                            @endif
                        <div id="login">
                            <h3 class="text-center text-white pt-5">Register form</h3>
                            <div class="container">
                                <div id="login-row" class="row justify-content-center align-items-center">
                                    <div id="login-column" class="col-md-6">
                                        <div id="login-box" class="col-md-12">
                                            @if (session('status'))
                                                <div class="mb-4 font-medium text-sm text-green-600">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <form id="login-form" class="form" method="POST" action="{{ route('register') }}">
                                            @csrf
                                                <h3 class="text-center text-info">Register</h3>
                                                <div class="form-group">
                                                    <label for="email" class="text-info">Email:</label><br>
                                                    <input type="text" name="email" id="email" class="form-control" :value="old('email')" required autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="text-info">Email:</label><br>
                                                    <input type="text" name="email" id="email" class="form-control" :value="old('email')" required autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="text-info">Password:</label><br>
                                                    <input type="password" name="password" id="password" class="form-control" required autocomplete="current-password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                                    @if (Route::has('password.request'))
                                                        <a class="text-info" href="{{ route('password.request') }}">
                                                            {{ __('Forgot your password?') }}
                                                        </a>
                                                    @endif
                                                        <input type="submit" name="submit" class="btn btn-info submit" value="submit">
                                                </div>
                                                <div id="register-link" class="text-right">
                                                    <a href="{{ route('register') }}" class="text-info">Register</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </body>
                </html>
                
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>