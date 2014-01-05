<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Off Canvas Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./tc/offcanvas.css" rel="stylesheet">
    <link href="./tc/navbar-fixed-top.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/ >


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal Profile <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Account Edit</a></li>
                <li><a href="#">Job Post </a></li>
                <li><a href="#">Job Receive</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li><a href="./" class="btn" id="fb-logout">Log out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
    
            <div>
              <div class="media" style="background:BLUE">
                <a class="pull-left" href="#">
                  <img class="media-object" src="http://www.online-image-editor.com/styles/2013/images/example_image.png" alt="150*150" style="width: 150px; height: 150px;" class="img-thumbnail">
                </a>
                <div class="media-body">
                  <div class="pull-left">
                    <h3>這裡放名字</h3><br><br><br>
                    <button type="button" class="btn btn-info btn-xs">Profile Edit</button>
                  </div>              
                  <div class="pull-right" style="background:red" style="WIDTH: 130px;">
                    <br>
                    <button type="button" class="btn btn-info btn-lg " style="WIDTH: 120px;" data-toggle="modal" data-target="#myModalA">Job Post</button><br><br>
                    <button type="button" class="btn btn-info btn-lg " style="WIDTH: 120px;">Job Receive</button>
                  </div>
                  <div class="pull-right" style="background:green" style="WIDTH: 10px;">&nbsp;</div>
                  <div class="pull-right" style="background:orange" style="WIDTH: 130px;">
                    <br>
                    <button type="button" class="btn btn-info btn-lg " style="WIDTH: 120px;">Profile</button><br><br>
                    <button type="button" class="btn btn-info btn-lg " style="WIDTH: 120px;">-More-</button>
                  </div>
                </div>
              </div>
            </div>
            <br>

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-8 col-sm-8" >
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>

          <div class="row" style="background:green">

            <div class="col-2 col-sm-2 col-lg-2">
              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default " data-toggle="dropdown">依地點搜尋 <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">中山區</a></li>
                      <li><a href="#">中正區</a></li>
                      <li><a href="#">萬華區</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
              </div><!-- /input-group -->
            </div><!--/span-->

            <div class="col-3 col-sm-3 col-lg-3">
              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default " data-toggle="dropdown">依工作時間搜尋 <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">本日</a></li>
                      <li><a href="#">一星期</a></li>
                      <li><a href="#">一個月</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
              </div><!-- /input-group -->
            </div><!--/span-->

            
            

          </div><!--/row-->


            <div style ="background:red">
                    <div class="col-3 col-sm-3 col-lg-3">
                      
                      <h2>工作列表</h2>
                    </div>
                    <div class="col-9 col-sm-9 col-lg-9">
                      <br>
                      <button class="btn-info btn-lg" data-toggle="modal" data-target="#myModalA" style="WIDTH: 180px">Post Job</button><br>
                    </div>
            </div>

            <div  class="col-12 col-sm-12 col-lg-12" >
                <hr size="10px;"> 

                <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="http://pic.pimg.tw/eternalforce/f51b35718f84252502faaf61a7d78db6.jpg?v=1275537537" alt="75*75" style="width: 75px; height: 75px;" class="img-thumbnail">
                    </a>
                    <div class="media-body">
                      <div class="pull-right" style="background:red">
                        <br>
                        <button class="btn-info btn-lg" data-toggle="modal" data-target="#myModalB">Details...</button>
                      </div>
                      <a href="#"><font color="red"><h4 class="media-heading">topic</h4></font></a>
                      <h4>name</h4>
                      <>
                    </div>
                </div>
                <br>

                <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="http://pic.pimg.tw/eternalforce/f51b35718f84252502faaf61a7d78db6.jpg?v=1275537537" alt="75*75" style="width: 75px; height: 75px;" class="img-thumbnail">
                    </a>
                    <div class="media-body">
                      <div class="pull-right" style="background:red">
                        <br>
                        <button class="btn-info btn-lg" data-toggle="modal" data-target="#myModalB">Details...</button>
                      </div>
                      <a href="#"><font color="red"><h4 class="media-heading">topic</h4></font></a>
                      <h4>name</h4>
                      <>
                    </div>
                </div>
                <br>

                <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="http://pic.pimg.tw/eternalforce/f51b35718f84252502faaf61a7d78db6.jpg?v=1275537537" alt="75*75" style="width: 75px; height: 75px;" class="img-thumbnail">
                    </a>
                    <div class="media-body">
                      <div class="pull-right" style="background:red">
                        <br>
                        <button class="btn-info btn-lg" data-toggle="modal" data-target="#myModalB">Details...</button>
                      </div>
                      <a href="#"><font color="red"><h4 class="media-heading">topic</h4></font></a>
                      <h4>name</h4>
                      <>
                    </div>
                </div>
                <br>
                
          </div> 


        </div><!--/span-->

        <div class="col-xs-6 col-sm-4 sidebar-offcanvas" id="sidebar" role="navigation" style="background:yellow">
          <div class="list-group">
            <a href="#" class="list-group-item btn " data-toggle="modal" data-target="#myModalB">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>


    </div><!--/.container-->

            <!-- Modal A -->
            <div class="modal fade " id="myModalA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog ">
                <div class="modal-content">
                  <form name="form1" method="post" action="addpost.php">
                  <div class="modal-header" style="background:#CDFEFF">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Post job!!!</h4>
                  </div>
                    
                      <div class="modal-body">
                            
                            <div class="input-group">
                              <span class="input-group-addon">Topic</span>
                              <input type="text" class="form-control" placeholder="please decribe the job you'll post in one sentence" name="in_topic">
                            </div>
                            <br>

                            <div class="input-group">
                              <span class="input-group-addon">Locations</span>
                              <input type="text" class="form-control" placeholder="where to work , if there're more places need to go. pls type them all." name="in_location">
                            </div>
                            <br>   

                            


                            <div class="input-group">
                              <span class="input-group-addon">Reward</span>
                              <input type="text" class="form-control" placeholder="Money , something or nothing" name="in_reward">
                            </div>

                            <!--div class="row">
                                <div class="col-lg-6">
                                  <div class="input-group">
                                      <span class="input-group-addon">Start Time</span>
                                      <input type="text" class="form-control" placeholder="Ex :2014/7/9 3:00PM">
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="input-group">                            
                                      <span class="input-group-addon">Finish Time</span>
                                      <input type="text" class="form-control" placeholder="EX :2015/8/10 4:00AM">
                                  </div>
                                </div>
                            </div>
                            <br-->

                            <!--div class="row" style="height: 40px;">
                                <div class="col-lg-2">
                                  <div>
                                      <h4><span class="label label-default">Start Time</span></h4>
                                  </div>
                                </div>

                                <div class="col-lg-3">
                                  <select class="form-control">
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                  </select>
                                </div>

                                <div class="col-lg-3">
                                  <select class="form-control">
                                        <option>Jan</option>
                                        <option>Feb</option>
                                        <option>Mar</option>
                                        <option>Apr</option>
                                        <option>May</option>
                                  </select>
                                </div>

                                <div class="col-lg-2">
                                  <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                  </select>
                                </div>

                                <div class="col-lg-2">
                                  <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                  </select>
                                </div>
                            </div>
                            <br-->

                            <!--div class="row" style="height: 10px;">
                                <div class="col-lg-2" style="width: 120px">
                                  <div>
                                      <h4><span class="label label-default">Start Time</span></h4>
                                  </div>
                                </div>

                                <div class="col-lg-3" style="height: 10px; width: 80px">
                                  <select style="height: 30px;">
                                      <optgroup selected="true" label="year"> 
                                       <option>2014</option>
                                       <option>2015</option>
                                  </select>
                                </div>

                                <div class="col-lg-3" style="height: 10px; width: 60px">
                                  <select style="height: 30px;">
                                      <optgroup selected="true" label="month"> 
                                       <option>1</option>
                                       <option>2</option>
                                  </select>
                                </div>

                                <div class="col-lg-3" style="height: 10px; width: 80px">
                                  <select style="height: 30px;">
                                      <optgroup selected="true" label="date"> 
                                       <option>1</option>
                                       <option>2</option>
                                  </select>
                                </div>

                                <div class="col-lg-3" style="height: 10px; width: 60px">
                                  <select style="height: 30px;">
                                      <optgroup selected="true" label="hour"> 
                                       <option>1</option>
                                       <option>2</option>
                                  </select>
                                </div>

                                <div class="col-lg-3" style="height: 10px; width: 60px">
                                  <select style="height: 30px;">
                                      <optgroup selected="true" label="min"> 
                                       <option>1</option>
                                       <option>2</option>
                                  </select>
                                </div>
                            </div>
                            <br><br>

                            <div class="row" style="height: 10px;">
                                <div class="col-lg-2" style="width: 120px">
                                  <div>
                                      <h4><span class="label label-default">Finish Time</span></h4>
                                  </div>
                                </div>

                                <div class="col-lg-3" style="height: 10px; width: 80px">
                                  <select style="height: 30px;">
                                      <optgroup selected="true" label="year"> 
                                       <option>2014</option>
                                       <option>2015</option>
                                  </select>
                                </div>

                                <div class="col-lg-3" style="height: 10px; width: 60px">
                                  <select style="height: 30px;">
                                      <optgroup selected="true" label="month"> 
                                       <option>1</option>
                                       <option>2</option>
                                  </select>
                                </div>

                                <div class="col-lg-3" style="height: 10px; width: 80px">
                                  <select style="height: 30px;">
                                      <optgroup selected="true" label="date"> 
                                       <option>1</option>
                                       <option>2</option>
                                  </select>
                                </div>

                                <div class="col-lg-3" style="height: 10px; width: 60px">
                                  <select style="height: 30px;">
                                      <optgroup selected="true" label="hour"> 
                                       <option>1</option>
                                       <option>2</option>
                                  </select>
                                </div>

                                <div class="col-lg-3" style="height: 10px; width: 60px">
                                  <select style="height: 30px;">
                                      <optgroup selected="true" label="min"> 
                                       <option>1</option>
                                       <option>2</option>
                                  </select>
                                </div>
                            </div>
                            <br-->

                            <div class = "row">
                              <div class="col-lg-6">
                                <h4><span class="label label-default">Start Time</span></h4>
                                <input type="text" value="2014/03/15 05:06" id="datetimepicker" name="in_st"><br>
                              </div>

                              <div class="col-lg-6">
                                <h4><span class="label label-default">Finish Time</span></h4>
                                <input type="text" value="2015/06/20 07:08" id="datetimepicker2" name="in_ft"><br>                        
                              </div>
                            </div>
                            <br>
       
                            <textarea class="form-control text" rows="15" style="resize: none;" placeholder="give some more details about your job ...." name="in_des"></textarea>                                
                      </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" value="Post!!">Post!!</button>
                  
                  </div><!-- /.modal-content -->
                  </form>
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


            <!-- Modal B -->
            <div class="modal fade" id="myModalB" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" style="background:#C7EFA1">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Modal B</h4>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

    <?php

      $my_facebook_id = $_POST["my_username"];

      var_dump($my_facebook_id);
    ?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
    <script src="dropdown.js"></script>
    <script src="modal.js"></script>  

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

     <script id="my-script-playground">
         window.fbLoaded = function(){

             var 


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
             }



             $("#fb-logout").click(function(){
                 FB.logout();

                
                document.cookie = my_facebook_id + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = my_username + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = my_email + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = my_location + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = my_gender + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
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

                 
                     // document.cookie= 'my_facebook_id = response.id';
                     // document.cookie= 'my_username = response.username';
                     // document.cookie= 'my_email = response.email';
                     // document.cookie= 'my_location = response.location';
                     // document.cookie= 'my_gender = response.gender';


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

     <script src="jquery.js"></script>
     <script src="jquery.datetimepicker.js"></script>

     <script>
     $('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});
     </script>

     <script>
     $('#datetimepicker2').datetimepicker({value:'2015/06/20 07:08',step:10});
     </script>

  </body>
</html>


