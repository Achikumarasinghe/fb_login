<?php
session_set_cookie_params(300);
			session_start();
			session_regenerate_id();
			
			
			setcookie('session_cookie', session_id(), time() + 300, '/');
			?>
<!doctype html>
<html>
    <head>
        <title>Facebook Login</title>
		      <!-- BootStrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    
    </head>
    <body>
	<div class="row" align="center" style="padding-top: 20px;">
	<div class="col-12">
                    <h3 style="font-size: 50px; color:PALETURQUOISE">Facebook Login</h3>  <br>
                
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

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/Oauth2/check.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>	 
    </div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</body>
</html>