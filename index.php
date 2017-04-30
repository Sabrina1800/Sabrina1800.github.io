<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>


  <body>
<!-- 	<div style='text-align:center'>
		<div height="125px" style='padding-top:10px'>

			<div height="125px">
				<script type="text/javascript"><!--
				 google_ad_client = "pub-6904774409601870";
				 /* 728x90, created 2/8/10 */
				 google_ad_slot = "4242245788";
				 google_ad_width = 728;
				 google_ad_height = 90;
				
				 </script>
				 <script type="tex t/javascript"
				 src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				 </script>
			</div>
    </div>
	</div> -->


    <!-- <h1>Login with Instragram</h1>
    OAuth using PHP <a href='http://www.9lessons.info'>9lessons.info</a> -->
    <?php
session_start();
if (!empty($_SESSION['userdetails'])) 
{
	header('Location: home.php');
}
      require 'instagram.class.php';
      require 'instagram.config.php';
      
      // Display the login button
      $loginUrl = $instagram->getLoginUrl();
      echo "<a class=\"button\" href=\"$loginUrl\">Sign in with Instagram</a>";
    ?>

  </body>
<iframe src="http://demos.9lessons.info/counter.html" frameborder="0" scrolling="no" height="0"></iframe>

</html>