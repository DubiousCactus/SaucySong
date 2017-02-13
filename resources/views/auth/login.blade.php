<!doctype html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <title>SaucySong</title>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='http://fontawesome.io/assets/font-awesome/css/font-awesome.css'>
        <link rel="stylesheet" href="{{ mix('/css/login.css') }}">
    </head>
    <body>
        <div class="background"></div>
        <div id="formWrapper">
            <div id="form">
                <form role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="logo">
                        SaucySong
                    </div>
                    <div class="form-item register-hidden" id="name-field">
                        <p class="formLabel">Name</p>
                        <input type="text" name="name" id="name" class="form-style" autocomplete="off"/>
                    </div>
                    <div class="form-item">
                        <p class="formLabel">Email</p>
                        <input type="email" name="email" id="email" class="form-style" autocomplete="off"/>
                    </div>
                    <div class="form-item">
                        <p class="formLabel">Password</p>
                        <input type="password" name="password" id="password" class="form-style" />
                    </div>
                    <div class="form-item register-hidden" id="passwordConfirm-field">
                        <p class="formLabel">Confirm password</p>
                        <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-style" />
                    </div>
                    <p><a href="{{ route('password.request') }}" ><small>Forgot Password ?</small></a></p>    
                    <div class="form-item">
                    <p class="pull-left"><a href="{{ route('register') }}" id="register"><small>Register</small></a></p>

                    <a class="btn btn-block btn-social btn-facebook">
                        <span class="fa fa-facebook"></span> Sign in with Facebook
                    </a>
                    <hr>
        
                    <button type="submit" class="login pull-right">Login</button>
                    <div class="clear-fix"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class='container'>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
          <div class='bar'></div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
        <script src="{{ mix('/js/login.js') }}"></script>
        <script src="https://use.fontawesome.com/63b52fd093.js"></script>
        <script>
            $('.background').particleground({
                dotColor: 'cyan',
                lineColor: 'yellow',
                density: 8000,
                proximity: 90
            });
        </script>
    </body>
</html>