<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SaucySong</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <link rel='stylesheet prefetch' href='http://fontawesome.io/assets/font-awesome/css/font-awesome.css'>

        <link rel="stylesheet" href="{{ mix('/css/all.css') }}">
    </head>
    <body>
        <div class="sidebar">
        	<div class="profile">
        		<div class="avatar">
        			<img src="/images/avatar.png" alt="avatar">
        		</div>
        		<p>Theo M.</p>
        	</div>
        	<div class="category">
        		<h1>core</h1>
        	</div>
        	<hr>
        	<div class="styles">
        		<div class="style">frenchcore</div>
        		<div class="style active">hardtek</div>
        		<div class="style">frenchcore</div>
        		<div class="style">frenchcore</div>
        		<div class="style">frenchcore</div>
        		<div class="style">frenchcore</div>
        		<div class="style">frenchcore</div>
        		<div class="style">frenchcore</div>
        		<div class="style">frenchcore</div>
        		<div class="style">frenchcore</div>
        	</div>
            <a class="add-button" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
        <div class="main">
        	@yield('content')
        </div>
        <div class="footer">
            <div class="playlist-control">
                <a href="#" class="glyphicon glyphicon-random">&nbsp;</a>
                <a href="#" class="glyphicon glyphicon-heart-empty">&nbsp;</a>
            </div>

            <div class="volume-control">
                <i class="fa fa-volume-down"></i>
                <div id="volume"></div>
                <i class="fa fa-volume-up"></i>
            </div>

            <div class="controls">
              <a href="#back" class="fa fa-fast-backward"></a>
              <a href="#play" class="fa fa-pause"></a>
              <a href="#forward" class="fa fa-fast-forward"></a>
            </div>

            <div class="song-info">
                
                <p>
                    <i class="fa fa-music" aria-hidden="true" style="font-size: 26px;"></i>
                    &nbsp;&nbsp;Salut C'est Cool - les Fleurs&nbsp;&nbsp;
                    <i class="fa fa-music" aria-hidden="true" style="font-size: 26px;"></i>
                </p>
                <i class="song">02:54 / 03:27</i>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')</script>

        <!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>