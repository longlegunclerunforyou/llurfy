<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    Facebook Code Example
    @author: LittleQ <littleq0903@gmail.com>
    @date: 2013-11-23
    -->
    <meta charset="UTF-8">
    <title>FB API EXAMPLE</title>

    <!-- BLOCK: Loading libraries -->
    <script src="./your_secret.js"></script>
    <script src="../your_secret.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <!-- ENDBLOCK: Loading libraries -->

</head>
<body>
    <!-- BLOCK: FB SDK initialization -->
    <div id="fb-root"></div>



    <div id="my-html-playground" class="container">
        <div id="my-login-control" class="well">
            <button id="my-login-button" class="btn btn-primary">Login with Facebook</button>
            <p id="my-login-message"></p>
            <button id="my-friend-button" class="btn btn-primary">Be My Friend!</button>
            <button id="YAQQ" class="btn btn-primary">YA</button>
        </div>


        <div id="my-profile" class="row">
            <div class="col-md-3">
                <!-- Profile Picture -->
                <img id="my-profile-picture" class="img-thumbnail" src="" alt="">
            </div>
            <div class="col-md-9">
                <!-- Profile Information -->
                <dl class="dl-horizontal">
                    <dt>Name</dt>
                    <dd id="my-profile-name"></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Gender</dt>
                    <dd id="my-profile-gender"></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Username</dt>
                    <dd id="my-profile-username"></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Facebook ID</dt>
                    <dd id="my-profile-facebook-id"></dd>
                </dl>
            </div>
        </div>

        <div class="row">
            <div id="my-like-btn" class="col-md-8">
                <div class="fb-like" data-href="https://www.facebook.com"></div>
                <div class="fb-comments" data-href="https://www.facebook.com"></div>
            </div>
        </div>
    </div>



    <script>
    window.fbAsyncInit = function() {
        // init the FB JS SDK
        FB.init({
        appId      : FacebookAppId,                        // App ID from the app dashboard
        cookie     : true,                                 // Allowed server-side to fetch fb auth cookie
        status     : true,                                 // Check Facebook Login status
        xfbml      : true                                  // Look for social plugins on the page
        });


        window.fbLoaded();
        // Additional initialization code such as adding Event Listeners goes here
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

    <script id="my-script-playground">
            window.fbLoaded = function () {
                // this function will be invoked after the FB.init().
                // define the events when login status changed.
                FB.Event.subscribe('auth.login', function(response) {
                    fetch_my_profile(); 
                    // when user has been logged in, this block will be triggered.
                    var msg = "You're logged in.";
                    $("#my-login-message").html(msg);
                    // print out the response in the console.
                    console.log("Your login response:");
                    console.log(response);
                });     
// define the action when user clicked the login button.
                $("#my-login-button").click(function(){
                    FB.login();
                });  

                $("#YAQQ").click(function(){
                        FB.ui(
                        {
                            method: 'feed',
                            name: 'Facebook Dialogs',
                            link: 'http://www.facebook.com/',
                            picture: 'http://fbrell.com/f8.jpg',
                            caption: 'FB',
                            description: 'FBFB'
                            },
                            function(response) {
                            if (response && response.post_id) {
                            alert('Post was published.');
                            } else {
                            alert('Post was not published.');
                            }
                        }
                        );

                });  

                var fetch_my_profile = function () {
                    FB.api('/me', function(response) {
                        var my_name = response.name;
                        var my_gender = response.gender;
                        var my_username = response.username;
                        var my_facebook_id = response.id;
						var my_facebook_city = response.city;

                        $("#my-profile-name").html(my_name);
                        $("#my-profile-gender").html(my_gender);
                        $("#my-profile-username").html(my_username);
                        $("#my-profile-facebook-id").html(my_facebook_id);
						
						
						
					   document.cookie= "namec=" + my_name;
					   document.cookie= "nameid = 123;"

                    });

                    FB.api('/me/picture?width=250', function(response) {
                        var my_picture_url = response.data.url;
                    
                        $("#my-profile-picture").attr('src', my_picture_url);
                    });
                };



                $("#my-friend-button").click(function(){
                    FB.api('/me', function (profile_response) {
                        var my_id = profile_response.id;
                        console.log(my_id); // You will get your id here.
                        FB.ui({
                            'method': 'friends',
                            'id': my_id
                        }, function(friend_response) {
                            var she_say_yes = friend_response.action;

                            if (she_say_yes) {
                                // User had sent your the friend request via the dialog :)
                                alert("Thank you! We will be good friends.");
                            } else {
                                // User didn't send you the request to be friends ;(
                                alert("Alright, it must be my wrong :(");
                            }
                        });
                    });
                });
            }

    </script>

	
   <?php

      $id = $_COOKIE['my_facebook_id'];
      $username = $_COOKIE['my_username'];
      $email = $_COOKIE['my_email'];
      $location = $_COOKIE['my_location'];
      $gender = $_COOKIE['my_gender'];

      echo $_COOKIE["namec"];
	  echo $_COOKIE["nameid"];
      var_dump($username);


      $host="mysql.fhero.net";
      $user="u662537759_db1";
      $ps="llurfy7890";
      $dbase="u662537759_db1";

      $link = mysql_connect($host,$user,$ps);
      mysql_select_db($dbase,$link);

      $insert_str = "insert into member(id,name,gender,address,email)
      Values('$id','$username','$gender','$location','$email')";

      mysql_query($insert_str);

   ?>

    <!-- ENDBLOCK: FB SDK initialization -->
    
    <!-- BLOCK: Your playground -->
    <!-- ENDBLOCK: Your playground -->
</body>
</html>
