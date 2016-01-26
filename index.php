<?php 
//require 'system/system.php';
//User::register();
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MAPSTRONIK</title>
    <link rel="stylesheet" href="assets/css/foundation.css" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/css.css"/>
  </head>
  <body align="center">
    
    <div class="row">
      <div class="large-12 columns">
        <h1>MAPTRONIK</h1>
        </div>
    </div>
      
      <div class="row">
            <div class="large-4 large-centered columns">
              <form method="POST" action="" class="formulario" >
                <input type="text" name="usuario" value="USER" class="inputs">
                <input type="text" name="password" value="PASSWORD" class="inputs">
              </form>
            </div>
      </div>

        <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

  </body>
   <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript">
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '675979259211293',
          xfbml      : true,
          version    : 'v2.5'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
</html>
