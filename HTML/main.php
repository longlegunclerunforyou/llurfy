<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <script src="./your_secret.js"></script>
    <script src="../your_secret.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

     <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="./offcanvas.js"></script>
    <script src="./dropdown.js"></script>
    <script src="./modal.js"></script>  

    <script>
       window.fbAsyncInit = function() {
           // init the FB JS SDK
           FB.init({
           appId      : 474884645966454,                        // App ID from the app dashboard
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
                    FB.login(function(response) {
                    }, {scope: 'email,user_location,user_hometown'});
                });  

                $("#fb-logout").click(function(){
                 // FB.login(); 
                 FB.logout();

                 document.cookie = "my_facebook_id =" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_username=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_email=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_location=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_gender=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

               });

           var fetch_my_profile = function () {
               FB.api('/me', function(response) {
                   // var my_name = response.name;
                   // var my_gender = response.gender;
                   // var my_username = response.username;
                   // var my_facebook_id = response.id;
                   // var my_email = response.email;
                   // var my_location = response.location.name;
                   
                   //console.log(my_email);
                   //console.log(my_location);

                   // <%session("my_facebook_id")=my_facebook_id>;
                   // <%session("my_username")=my_username>;
                   // <%session("my_email")=my_email>;
                   // <%session("my_location")=my_location>;
                   // <%session("my_gender")=my_gender>;
               
                   // document.cookie= "my_facebook_id=" + my_facebook_id;
                   // document.cookie= "my_username=" + my_username;
                   // document.cookie= "my_email=" + my_email;
                   // document.cookie= "my_location=" + my_location;
                   // document.cookie= "my_gender=" + my_gender;
                   
                   

               });
  
                    // FB.api('/me/picture?width=250', function(response) {
                    //     var my_picture_url = response.data.url;
                    
                    //     document.cookie= "my_picture_url=" + my_picture_url;
                    // });


           };

       };

    </script>
    
    <title>跑腿網</title>

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
                          
                            <div class = "row">

                              <div class="col-lg-6">
                                <h4><span class="label label-default">Start Time</span></h4>
                                <input type="text" value="2014/03/15 05:06" id="datetimepicker" name="in_st"><br>
                              </div>

                              <div class="col-lg-6">
                                <h4><span class="label label-default">Finish Time</span></h4>
                                <input type="text" value="2015/06/20 07:08" id="datetimepicker2" name="in_ft"><br>                        
                              </div>
                            </div><!--row-->
                            <br>
       
                            <textarea class="form-control text" rows="15" style="resize: none;" placeholder="give some more details about your job ...." name="in_des"></textarea>                                
                      </div><!--modal body-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" value="Post!!">Post!!</button>
                    </div>
                  </form>   
                </div><!-- /.modal-content -->                               
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


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
              <img class="media-object" src="" alt="" style="" class="img-thumbnail" id="my-profile-picture">
              <div class="media" style="">
                <a class="pull-left" href="#">
                  <!-- <img class="media-object" src="" alt="" style="width: 150px; height: 150px;" class="img-thumbnail" id="my-profile-picture"> -->
                  <img class="media-object" src="" alt="" style="width: 150px; height: 150px;" class="img-thumbnail" id="my-profile-picture">
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
            
              <div style="float: left; width:65%;">
              
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
                                <li <?php setcookie("sql","SELECT * FROM post　 WHERE TO_DAYS(NOW()) - TO_DAYS(postime) <= 30 order by postid desc;　") ?>><a href="#">本日</a></li>
                                <li <?php setcookie("sql","SELECT * FROM post　 WHERE TO_DAYS(NOW()) - TO_DAYS(postime) <= 10080 order by postid desc;　") ?>><a href="#">一星期</a></li>
                                <li <?php setcookie("sql","SELECT * FROM post　 WHERE TO_DAYS(NOW()) - TO_DAYS(postime) <= 43200 order by postid desc;　") ?>><a href="#">一個月</a></li>
                                <li <?php setcookie("sql","SELECT * FROM post   order by postid desc;　") ?>><a href="#">不限</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                          </div><!--   -->
                        </div><!-- /input-group -->
                      </div><!--/span-->
                      <?php 
                      $sql = $_COOKIE["sql"];
                      var_dump($sql);
                      ?>

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
                <div>
                  <?php              
                      mysql_connect("mysql.fhero.net","u662537759_db1","llurfy7890");
                      mysql_select_db("u662537759_db1");

                      $currentlocation =  $_COOKIE["my_location"];
                      // $notime = '*';
                      // $pic = ""

                      $sql="select * from post order by postid desc";  //±qguestbookÅª¨ú¸ê®Æ¨Ã¨ÌnoÄæ¦ì°µ»¼´î±Æ§Ç
                      $result=mysql_query($sql);
                      while (list($postid,$name,$fb_id,$topic,$location,$reward,$des,$post_time,$start_time,$finish_time)
                        =mysql_fetch_row($result))
                      {

                      
                        echo  "
                            <div  class='col-12 col-sm-12 col-lg-12' >
                               <hr size='10px;''> 
                              <div class='media'>
                                  <a class='pull-left' href='#''>
                                    <img class='media-object' src='http://pic.pimg.tw/eternalforce/f51b35718f84252502faaf61a7d78db6.jpg?v=1275537537' alt='75*75' style='width: 75px; height: 75px;'' class='img-thumbnail'>
                                  </a>
                                  <div class='media-body'>
                                        <div class='pull-right' style='background:red'>
                                          <br>
                                          <button class='btn-info btn-lg' data-toggle='modal' data-target='#myModalB'>Details....</button>
                                        </div>
                                        <font color='red'><h4 class='media-heading'>".$topic; echo"</h4></font>
                                        <h4>".$name;  echo"</h4>".$location; echo"
                                  </div>
                                  <br>
                              </div>
                            </div>

                        <!-- Modal B -->
                  <div class='modal fade' id='myModalB' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                      <div class='modal-content'>
                            <form name='form1' method='post' action='addpost.php'>
                            
                                <div class='modal-header' style='background:#C7EFA1'>
                                  <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                  <h4 class='modal-title' id='myModalLabel'>Post job!!!</h4>
                                </div>
                              
                                <div class='modal-body'>
                                      
                                      <div class='input-group'>
                                        <span class='input-group-addon'>Topic</span>              
                                          <input type='text' class='form-control' value='".$topic; echo"' name='in_topic' disabled> 
                                      </div>
                                      <br>

                                      <div class='input-group'>
                                        <span class='input-group-addon'>Locations</span>
                                        <input type='text' class='form-control' value='".$location; echo"' name='in_location' disabled>
                                      </div>
                                      <br>                           

                                      <div class='input-group'>
                                        <span class='input-group-addon'>Reward</span>
                                        <input type='text' class='form-control' value='".$reward; echo"' name='in_reward' disabled>
                                      </div>
                                    
                                      <div class = 'row'>
                                        <div class='col-lg-6'>
                                          <h4><span class='label label-default'>Start Time</span></h4>
                                          <input type='text' value='".$start_time; echo"' id='datetimepicker' name='in_st' disabled><br>
                                        </div>

                                        <div class='col-lg-6'>
                                          <h4><span class='label label-default'>Finish Time</span></h4>
                                          <input type='text' value='".$finish_time; echo"' id='datetimepicker2' name='in_ft' disabled><br>                        
                                        </div>
                                      </div>
                                      <br>
                 
                                      <textarea class='form-control text' rows='15' style='resize: none;' placeholder='".$des; echo"' name='in_des' disabled></textarea>                                
                                </div><!--modal body-->
                              <div class='modal-footer'>
                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                <button type='submit' class='btn btn-primary' value='want'>I want it !!</button>
                              </div>

                            </form>
                      </div><!-- /.modal-content -->                  
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal --> ";               
                    }

                  ?>
                </div>
                <hr>
              </div>

              <div class="col-xs-6 col-sm-4 sidebar-offcanvas" id="sidebar" role="navigation" style="background:yellow; float: right; width:35%;">
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
            </div>
            


            

            

           
    <?php
      $id = $_COOKIE["my_facebook_id"];
      var_dump($id);
      if ($id == NULL) {            
      echo "<script>document.location.href='index.php'</script>";      
      }
    ?>
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>

    <script src="jquery.js"></script>
    <script src="jquery.datetimepicker.js"></script>

    <script>
     $('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});
    </script>

    <script>
     $('#datetimepicker2').datetimepicker({value:'2015/06/20 07:08',step:10});
    </script>

</html>