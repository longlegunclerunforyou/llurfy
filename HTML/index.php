<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Sticky Footer Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./tc/sticky-footer.css" rel="stylesheet">
	
	
	<!-- BLOCK: Loading libraries -->
   <script src="./your_secret.js"></script>
   <script src="../your_secret.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
   <!-- ENDBLOCK: Loading libraries -->
	

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	
	<div id="fb-root"></div>
   <script>
   window.fbAsyncInit = function() {
       // init the FB JS SDK
       FB.init({
       appId      : FacebookAppId,                        // App ID from the app dashboard
       cookie     : true,                                 // Allowed server-side to fetch fb auth cookie
       status     : true,                                 // Check Facebook Login status
       xfbml      : true                                  // Look for social plugins on the page
       });

       // Additional initialization code such as adding Event Listeners goes here
       window.fbLoaded();
   };

   // Load the SDK asynchronously
   (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       //js.src = "//connect.facebook.net/en_US/all.js";
       // Debug version of Facebook JS SDK
       js.src = "//connect.facebook.net/en_US/all/debug.js";
       fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   </script>
    

    <div align="center">
          <img src ="a-2.png" >
    </div>



    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container" align="center">
        <img src="logo.jpg">
        <div class="page-header center">
          <h1>長腿叔叔 Run for you</h1>
        </div>
        <p class="lead">一個跑腿的故事</p>
        <div align="center">
        <button id="fb-login" class="btn btn-info" align="center">Login with Facebook</button>
        </div>
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted">University of Taipei - Computer Science - Social Network Application.</p>
      </div>
    </div>

	
	<script id="my-script-playground">
       window.fbLoaded = function(){
           // define the events when login status changed.
           FB.Event.subscribe('auth.login', function(response) {
               // when user has been logged in, this block will be triggered.
               var msg = "You're logged in.";
               $("#my-login-message").html(msg);
               console.log("Your login response:");
               console.log(response);

               // fetch the profile
               fetch_my_profile();
           });

           FB.getLoginStatus(function(response) {
             if (response.status === 'connected') {
               // the user is logged in and has authenticated your
               // app, and response.authResponse supplies
               // the user's ID, a valid access token, a signed
               // request, and the time the access token 
               // and signed request each expire
               fetch_my_profile();
               

             // } else {
             //   // the user isn't logged in to Facebook.
             //   FB.login(function(response){ 
             //   scope: 'email,publish_stream'
             //   });
             }
            });

           // define the action when user clicked the login button.
           $("#fb-login").click(function(){
               FB.login();             
           });



           // send me a friend request by using Facebok Friends Dialog
           

           var fetch_my_profile = function () {
               /*
               Fetching profile information.
               For more detail, please vist the following url:

               (Graph API: User documentation)
               https://developers.facebook.com/docs/graph-api/reference/user/
               */
               FB.api('/me', function(response) {
                   var my_name = response.name;
                   var my_gender = response.gender;
                   var my_username = response.username;
                   var my_facebook_id = response.id;
                   var my_email = response.email;
                   var my_location = response.location;

                   $("#my-profile-name").html(my_name);
                   $("#my-profile-gender").html(my_gender);
                   $("#my-profile-username").html(my_username);
                   $("#my-profile-facebook-id").html(my_facebook_id);
                   $("#my_email").html(my_email);
                   $("#my_location").html(my_location);

               
                   document.cookie= my_facebook_id;
                   document.cookie= my_username;
                   document.cookie= my_email;
                   document.cookie= my_location;
                   document.cookie= my_gender;


               });

               /*
               Fetching profile picture from Facebook.
               For more detail, please visit the following url:

               (Graph API: User/Picture reference)
               https://developers.facebook.com/docs/graph-api/reference/user/picture/
               */
               FB.api('/me/picture?width=250', function(response) {
                   var my_picture_url = response.data.url;
               
                   $("#my-profile-picture").attr('src', my_picture_url);
               });
           };
       };
   </script>

   <?php

      $id = $_COOKIE['my_facebook_id'];
      $username = $_COOKIE['my_username'];
      $email = $_COOKIE['my_email'];
      $location = $_COOKIE['my_location'];
      $gender = $_COOKIE['my_gender'];

      var_dump($id);
      var_dump($username);


      $host="llurfy.mooo.com";
      $user="root";
      $ps="123";
      $dbase="llurfy";

      $link = mysql_connect($host,$user,$ps);
      mysql_select_db($dbase,$link);

      $insert_str = "insert into member(id,name,gender,address,email)
      Values('$id','$username','$gender','$location','$email')";

      mysql_query($insert_str);

      header("Location:main.php");  
   ?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
