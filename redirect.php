<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <title>Assigment_02</title>
     
        <!-- BootStrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </head>
    <body style="color: ash;">

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" style="color:SPRINGGREEN" href="index.php">Assignment 02</a>
            <ul class="nav justify-content-right">
              
                <?php 
                    if(isset($_COOKIE['session_cookie'])) 
                    {
                        echo "<li class='nav-item'>
                                <a class='nav-link active' style='color:DEEPSKYBLUE' href='logout.php'>Logout</a>
                            </li>";
                    }
                ?>
            </ul>
        </nav>
        <div class="container">
            
            <div class="row" align="center" style="padding-top: 20px;">
                <div class="col-12">
                    <h2 style="font-size: 50px;color:LIGHTPINK">Welcome</h2>  
					<?php 
					if (!session_id()) {
    session_start();
}

					require_once __DIR__ . '/vendor/autoload.php';
	$fb = new Facebook\Facebook([
    'app_id' => '##############', // Replace {app-id} with your app id
	'app_secret' => '##################################',// Replace {secret-id} with your app id
  'default_graph_version' => 'v2.2',
  ]);
					try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name', $_SESSION['fb_access_token']);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();

echo '<h2 style="font-size: 50px; color:SILVER">'.$user['name'].'</h2>';
 ?>
                </div>
            </div>
          
        </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </body>
</html>