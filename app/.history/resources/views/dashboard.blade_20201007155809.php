<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: white;
        height: 100vh;
      }
      #login .container #login-row #login-column #login-box {
        margin-top: 0px;
        max-width: 600px;
        height: 350px;
        border: 1px solid #0ea49a;
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
    .home-main{
        background: #5812c5;
        color:#fff;
        padding: 13%;
        text-align: center;
    }
    .blinker{
        animation: blinker 1.5s linear infinite;
    }
    @keyframes blinker {
      50% {
        opacity: 0;
      }
    }
    .home-main button{
        background: #fff;
        color: #5812c5;
        border-radius: 0;
        font-weight: 700;
        width: 16%;
        height: 50px;
        top: 4%;
        margin-top: 3%;
    }
    .home-main button:hover{
        transition: 1s ease;
        color:#5812c5;
        width: 19%;
    }
    .content1-left{
        padding:9%;
    }
    .content1-right{
        padding:9%;
        background:#e4e4e4;
    }
    .home-content2{
        background: #adb5bd;
        padding: 1.4%;
        text-align: center;
    }
    .home-content2 p{
        font-size: 18px;
        line-height: 50px;
    }
    .home-content2 p span{
        font-weight: 500;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <div id="login">
            <h3 class="text-center text-info pt-5">Login form</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form id="login-form" class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                                <h3 class="text-center text-info">Login</h3>
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
        <div class="container-fluid home-content1">
            <div class="row">
                <div class="col-md-6 content1-left">
                    <h3>Why to use Bootstrap <span class="blinker">?</span></h3>
                    <p>Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.</p>
                    <!-- <div class="content1-left"></div> -->
                </div>
                <div class="col-md-6 content1-right">
                    <p>Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid home-content2">
            <p><span>News</span> and <span>announcements</span> for all things <span>Bootstrap</span>, including new <span>releases</span> and <span>Bootstrap Themes</span>.</p>
        </div>
    </x-slot>

</x-app-layout>
