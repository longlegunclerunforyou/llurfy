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


    function setserbytime(userkeytime){
        document.cookie= "cuk=" + userkeytime;
        window.location.reload();
    }

    </script>

    <script id="my-script-playground">
            window.fbLoaded = function () {
                // this function will be invoked after the FB.init().
                // define the events when login status changed.
                FB.Event.subscribe('auth.login', function(response) {
                    // when user has been logged in, this block will be triggered.
                    var msg = "You're logged in.";
                    $("#my-login-message").html(msg);
                    // print out the response in the console.
                    console.log("Your login response:");
                    console.log(response);
                });    


                $("#fb-logout").click(function(){
                 // FB.login(); 
                 FB.logout();

                document.cookie = "my_facebook_id =" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_username=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_email=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_location=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_gender=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "my_picture_url=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

               });


                $('#fb-share').click(function(){
                            var jtopic = document.form1.elements['in_topic'].value;
                            var jlocation = document.form1.elements['in_location'].value;
                            var jreward = document.form1.elements['in_reward'].value;
                            var jstart_time = document.form1.elements['in_st'].value;
                            var jfinish_time = document.form1.elements['in_ft'].value;
                            var jdes = document.form1.elements['in_des'].value;
                        FB.ui(
                        {

                            method: 'feed',
                            name: '我在長腿叔叔網站上PO了『'+jtopic+'』的臨時工作，趕快來幫幫我吧！',
                            link: 'http://llurfy.fhero.net/',
                            picture: 'http://llurfy.fhero.net/a-2.png',
                            caption: '工作地點：'+jlocation+'回饋：'+jreward+'開始時間：'+jstart_time+'結束時間：'+jfinish_time,
                            description: '工作敘述：'+jdes
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
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">長腿叔叔(Llurfy)</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="./main.php">Home</a></li>
            <li class="active"><a href="#about">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./" class="btn" id="fb-logout">Log out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
  
            <div class="container" style = " width: 65%">  
              <div class="panel panel-info">                          

                <?php

                  $pic = $_COOKIE["my_picture_url"];
                  $name = $_COOKIE["my_username"];
        
                  echo "
                    <div class='panel-heading'>
                    <img class='media-object' src='' alt='' style='' class='img-thumbnail' id='my-profile-picture'>
                    <div class='media'>
                        <a class='pull-left' href='#'>
                          <img class='media-object' src='".$pic;  echo "' alt='' style='width: 150px; height: 150px;' class='img-thumbnail' id='my-profile-picture'>
                        </a>
                        <div class='media-body'>
                          <div class='pull-left'>
                            <h3>".$name; echo "</h3><br><br><br>
                            <button type='button' class='btn btn-info btn-xs'>Profile Edit</button>
                          </div> 

                          <div class='pull-right' style='WIDTH: 130px;'>
                            <br>
                            <a href='myjob.php'><button type='button' class='btn btn-info btn-lg ' style='WIDTH: 120px;'>Job Post</button></a><br><br>
                            <button type='button' class='btn btn-info btn-lg ' style='WIDTH: 120px;'>Job Receive</button>
                          </div>

                          <div class='pull-right'  style='WIDTH: 10px;'>&nbsp;</div>
                          <div class='pull-right'  style='WIDTH: 130px;'>

                            <br>
                           
                        </div>
                    </div>
                    </div>

                ";
                ?>

                    <div class="panel-body">
                       
                      <div class="panel-group" id="accordion">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                開發人員
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                              <div> <!--開發人員內容-->

                                <div  class="col-12 col-sm-12 col-lg-12" > <!--瑋甯-->
                                  <hr size="10px;"> 
                                  <div class="media">
                                      <a class="pull-left" href="#">
                                        <img class="media-object" src="./PIC/A.jpg" alt="75*75" style="width: 75px; height: 75px;" class="img-thumbnail">
                                      </a>
                                      <div class="media-body">
                                            <div class="pull-right">
                                              <br>
                                              <button class="btn-info btn-lg" data-toggle="modal" data-target="#myModalA">Details....</button>
                                            </div>
                                            <font ><h2 class="media-heading">趙偉甯</h2></font>
                                            
                                      </div>
                                      <br>
                                  </div>
                                </div>
                                <BR>


                                <div  class="col-12 col-sm-12 col-lg-12" > <!--明宏-->
                                  <hr size="10px;"> 
                                  <div class="media">
                                      <a class="pull-left" href="#">
                                        <img class="media-object" src="./PIC/B.jpg" alt="75*75" style="width: 75px; height: 75px;" class="img-thumbnail">
                                      </a>
                                      <div class="media-body">
                                            <div class="pull-right">
                                              <br>
                                              <button class="btn-info btn-lg" data-toggle="modal" data-target="#myModalB">Details....</button>
                                            </div>
                                            <font ><h2 class="media-heading">鍾明宏</h2></font>
                                            
                                      </div>
                                      <br>
                                  </div>
                                </div>
                                <BR>


                                <div  class="col-12 col-sm-12 col-lg-12" > <!--嘉瑞-->
                                  <hr size="10px;"> 
                                  <div class="media">
                                      <a class="pull-left" href="#">
                                        <img class="media-object" src="./PIC/C.jpg" alt="75*75" style="width: 75px; height: 75px;" class="img-thumbnail">
                                      </a>
                                      <div class="media-body">
                                            <div class="pull-right">
                                              <br>
                                              <button class="btn-info btn-lg" data-toggle="modal" data-target="#myModalC">Details....</button>
                                            </div>
                                            <font><h2 class="media-heading">曹家瑞</h2></font>
                                            
                                      </div>
                                      <br>
                                  </div>
                                </div>

                              

                              </div>                            
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                開發動機
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                              <div><!--裡面內容-->
                              
                                

                                






                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                聯絡我們
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                            </div>
                          </div>
                        </div>
                      </div>                  
                    </div>
              </div>
            </div>

            <!-- Modal A -->
            <div class="modal fade " id="myModalA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog ">
                <div class="modal-content">                 
                  <div class="modal-header" style="background:#CDFEFF">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Post job!!!</h4>
                  </div>                    
                                      
                                      <div class="modal-body">

                                          <div class="row">
                                               
                                               <div class="pull-left">
                                                  <img class="media-object" src="./PIC/A1.jpg" style="width: 200px; height: 200px;" class="img-thumbnail" id="my-profile-picture" name="pic">  
                                               </div>  

                                               <div class="pull-right">
                                                  <div class="col-6"  style="WIDTH: 350px;">
                                                    <div class="input-group  ">
                                                        <span class="input-group-addon">Name</span>              
                                                        <input type="text" class="form-control col-6" value="趙偉甯" name="postname" readOnly> 
                                                    </div>
                                                  </div>                                    
                                                  <br>

                                                  <div class="col-6"  style="WIDTH: 350px;">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">系級</span>              
                                                        <input type="text" class="form-control" value="臺北市立大學 - 資訊科學系 四年級" name="in_topic" readOnly> 
                                                    </div>
                                                  </div>
                                                  <br>

                                                  <div class="col-6"  style="WIDTH: 350px;">
                                                    <div class="input-group">
                                                      <span class="input-group-addon">職位</span>
                                                      <input type="text" class="form-control" value="隊長" name="in_location" readOnly>
                                                    </div>
                                                  </div>
                                                  <br>                           

                                                  <div class="col-6"  style="WIDTH: 350px;">
                                                    <div class="input-group">
                                                      <span class="input-group-addon">能力</span>
                                                      <input type="text" class="form-control" value="隊長的權威" name="in_reward" readOnly>
                                                    </div>
                                                  </div>
                                                </div>

                                          </div>
                                            

                                            <div class = "row">
                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">Start Time</span></h4>
                                                <input type="text" value="" id="datetimepicker" name="in_st" readOnly><br>
                                              </div>

                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">Finish Time</span></h4>
                                                <input type="text" value="" id="datetimepicker2" name="in_ft" readOnly><br>                        
                                              </div>

                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">Post Time</span></h4>
                                                <input type="text" value="" name="posttime" readOnly><br>                        
                                              </div>

                                            </div>
                                            <br>
                       
                                            <textarea class="form-control text" rows="15" style="resize: none;" placeholder="" name="in_des" readOnly></textarea>                                
                                      </div><!--modal body-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" value="Post!!">Post!!</button>
                    </div> 
                </div><!-- /.modal-content -->                               
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- Modal B -->
            <div class="modal fade " id="myModalB" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog ">
                <div class="modal-content">
                  <form name="form1" method="post" action="addpost.php">
                  
                  <div class="modal-header" style="background:#CDFEFF">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Post job!!!</h4>
                  </div>                    
                     <div class="modal-body">

                                          <div class="row">
                                               
                                               <div class="pull-left">
                                                  <img class="media-object" src="./PIC/A1.jpg" style="height: 200px;" class="img-thumbnail" id="my-profile-picture" name="pic">  
                                               </div>  

                                               <div class="pull-right">
                                                  <div class="col-6"  style="WIDTH: 350px;">
                                                    <div class="input-group  ">
                                                        <span class="input-group-addon">Name</span>              
                                                        <input type="text" class="form-control col-6" value="鍾明宏" name="postname" readOnly> 
                                                    </div>
                                                  </div>                                    
                                                  <br>

                                                  <div class="col-6"  style="WIDTH: 350px;">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">系級</span>              
                                                        <input type="text" class="form-control" value="臺北市立大學 - 資訊科學系 四年級" name="in_topic" readOnly> 
                                                    </div>
                                                  </div>
                                                  <br>

                                                  <div class="col-6"  style="WIDTH: 350px;">
                                                    <div class="input-group">
                                                      <span class="input-group-addon">職位</span>
                                                      <input type="text" class="form-control" value="隊員" name="in_location" readOnly>
                                                    </div>
                                                  </div>
                                                  <br>                           

                                                  <div class="col-6"  style="WIDTH: 350px;">
                                                    <div class="input-group">
                                                      <span class="input-group-addon">能力</span>
                                                      <input type="text" class="form-control" value="吉他社前社長之帥" name="in_reward" readOnly>
                                                    </div>
                                                  </div>
                                                </div>

                                          </div>
                                            

                                            <div class = "row">
                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">Start Time</span></h4>
                                                <input type="text" value="" id="datetimepicker" name="in_st" readOnly><br>
                                              </div>

                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">Finish Time</span></h4>
                                                <input type="text" value="" id="datetimepicker2" name="in_ft" readOnly><br>                        
                                              </div>

                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">Post Time</span></h4>
                                                <input type="text" value="" name="posttime" readOnly><br>                        
                                              </div>

                                            </div>
                                            <br>
                       
                                            <textarea class="form-control text" rows="15" style="resize: none;" placeholder="" name="in_des" readOnly></textarea>                                
                                      </div><!--modal body-->
                    <div class="modal-footer">
                      <button id="fb-share" type="button" class="btn btn-primary">Share to FB</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" value="Post!!">Post!!</button>
                    </div>
                  </form>   
                </div><!-- /.modal-content -->                               
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- Modal C -->
            <div class="modal fade " id="myModalC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <input type="text" value="" placeholder="Please enter time" id="datetimepicker" name="in_st"><br>
                              </div>

                              <div class="col-lg-6">
                                <h4><span class="label label-default">Finish Time</span></h4>
                                <input input type="text" value="" placeholder="Please enter time" id="datetimepicker2" name="in_ft"><br>                        
                              </div>
                            </div><!--row-->
                            <br>
       
                            <textarea class="form-control text" rows="15" style="resize: none;" placeholder="give some more details about your job ...." name="in_des"></textarea>                                
                      </div><!--modal body-->
                    <div class="modal-footer">
                      <button id="fb-share" type="button" class="btn btn-primary">Share to FB</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" value="Post!!">Post!!</button>
                    </div>
                  </form>   
                </div><!-- /.modal-content -->                               
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->





            </div>
            


            

            

           
    <?php
      $id = $_COOKIE["my_facebook_id"];
      //var_dump($id);
     // var_dump($_COOKIE["cuk"]);
      if ($id == NULL) {            
      echo "<script>document.location.href='index.php'</script>";      
      }
    ?>
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>

    <script src="collapse.js"></script>
    <script src="jquery.js"></script>
    <script src="jquery.datetimepicker.js"></script>

    <script>
     $('#datetimepicker').datetimepicker({value:'',step:10});
    </script>

    <script>
     $('#datetimepicker2').datetimepicker({value:'',step:10});
    </script>

</html>