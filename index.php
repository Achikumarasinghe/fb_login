<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <title>Assigment_02</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </head>
    <body style="color: ash;">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php" style="color:SPRINGGREEN">Assignment 02</a>
        </nav>
        <div class="container">
            <div class="row" align="center" style="padding-top: 20px;">
                <div class="col-12">
                    <h2 style="font-size: 50px;color:PEACHPUFF">OAuth2 Framework</h2>  
                </div>
            </div>
			<div class="row" align="center" style="padding-top: 20px;">
                <div class="col-12">
				
                <?php 
                    if(!isset($_COOKIE['session_cookie'])) 
                    {
                        echo "<a class='nav-link' style='color:DEEPSKYBLUE' href='login.php'>Login</a>";
                    }
                ?>
                <?php 
                    if(isset($_COOKIE['session_cookie'])) 
                    {
                        echo "<a class='nav-link active' style='color:DEEPSKYBLUE' href='logout.php'>Logout</a>";
                    }
                ?>
                </div>
            </div>
        </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
</html>