<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./a-2.png">

    <script src="./your_secret.js"></script>
    <script src="../your_secret.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

     <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="./offcanvas.js"></script>
    <script src="./dropdown.js"></script>
    <script src="./modal.js"></script>  
    <!--script src="./myfont/mf.css"></script-->
    <link rel="stylesheet" type="text/css" href="./myfont/mf.css"/ >

    <script>


       window.fbAsyncInit = function() {
           // init the FB JS SDK
           FB.init({
           appId      : 1451800038373581,                        // App ID from the app dashboard
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
    <title>About</title>

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
          <a class="navbar-brand" href="./main.php">長腿叔叔(Llurfy)</a>
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
                            <h3>".$name; echo "</h3>
                            <div class='fb-like' data-href='http://llurfy.fhero.net' data-layout='standard' data-action='like' data-show-faces='true' data-share='true'></div><br>
                            <a href='http://www.facebook.com/llurfy' target='_blank' class='btn btn-info'>FB offical website</a>
                          </div> 

                          <div class='pull-right' style='WIDTH: 130px;'>
                            <br>
                            <a href='myjob.php'><button type='button' class='btn btn-info btn-lg ' style='WIDTH: 130px;'>My Posted</button></a><br><br>
                            <a href='postedjob.php'><button type='button' class='btn btn-info btn-lg ' style='WIDTH: 130px;'>My Received</button></a>
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
                                <h3>Developers</h3>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse ">
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
                                <h3>Develope Ambition</h3>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                              <div><!--裡面內容-->
                              
                                
                                <ul class="nav nav-tabs">
                                  <li><a href="#home" data-toggle="tab"><h3>取題動機</h3></a></li>
                                  <li><a href="#profile" data-toggle="tab"><h3>SNA課程提攜</h3></a></li>

                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                  <div class="tab-pane active" id="home">&nbsp;&nbsp;&nbsp;&nbsp;<p class="mf1">&nbsp;&nbsp;&nbsp;&nbsp;在選定題目之前，本想選擇交友類型的網站，但考慮到目前網上有有多種交友的類型，因此將題目轉向跑腿取向型網站，目前台灣尚未有此種專責跑腿的網站，因此選定此題目作為練習，也藉此發揮創意。</p></div>
                                  <div class="tab-pane" id="profile">&nbsp;&nbsp;&nbsp;&nbsp;<p class="mf1">&nbsp;&nbsp;&nbsp;&nbsp;SNA課程學習到多種的架設網站的工具，從基礎的HTML到CSS、PHP，而後進展的FB API，甚至是版本開發工具都是之前尚未有所接觸的，因此以學習的種種作為開發本網站的基礎，當中遇上不少困難，多是觀念不清加上從未接觸所造成的，但與隊友的合作中學習到不少知識與合作感想，即便目前公立尚且不成熟，但依然是寶貴的經驗。</p></div>
                                  <div class="tab-pane" id="messages">...</div>
                                  <div class="tab-pane" id="settings">...</div>
                                </div>

                                






                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <h3>Contact us</h3>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                              <div class="alert alert-info">
                              <h2><font color="#1989FF">Contact us!</font></h2>
                              <br>
                              <div class="row">
                                <div class="pull-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                <div class="pull-left"><h4>Email:</h4></div>
                                <div class="pull-left">&nbsp;</div>
                                <div class="pull-left"><a href="#" id="example"  class="btn btn-success" rel="popover" data-content="ppitjine@hotmail.com" data-original-title="偉甯's Email">偉甯's Email</a></div>
                                <div class="pull-left">&nbsp;</div>
                                <div class="pull-left"><a href="#" id="example2"  class="btn btn-success" rel="popover" data-content="rest950@gmail.com" data-original-title="明宏's Email">明宏's Email</a></div>
                                <div class="pull-left">&nbsp;</div>
                                <div class="pull-left"><a href="#" id="example3"   class="btn btn-success" rel="popover" data-content="tornadowind99@gmail.com&#13;&#10;tornadowind99@yahoo.com.tw" data-original-title="家瑞's Email">家瑞's Email</a></div>
                              </div>
                              <br>
                              <!-- <div class="pull-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> -->
                              
                              <div class="pull-left"><h4>Other Links:</h4></div><div class="pull-left">&nbsp;</div>
                                <a href="http://cs.utaipei.edu.tw/main.php" target="_blank" class="btn btn-info">北市大資科系</a>
                                <a href="http://www.utaipei.edu.tw/bin/home.php" target="_blank" class="btn btn-warning">臺北市立大學</a>                                
                              <!--   <input type="button" class ="btn btn-info" value="北市大資科系" onclick="location.href='http://cs.utaipei.edu.tw/main.php'" target="_blank">
                                <input type="button" class ="btn btn-warning" value="臺北市立大學" onclick="location.href='http://www.utaipei.edu.tw/bin/home.php'" target="_blank"> -->
                          </div>
                        </div>
                      </div>                  
                    </div>
              </div>
              <br><br>
              <div class="fb-comments" data-href="http://llurfy.fhero.net/comment" data-width="801" data-numposts="5" data-colorscheme="light"></div>
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

                                              <div class="pull-right">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                              </div> 

                                              <div class="pull-right">
                                                <img class="media-object" src="./PIC/A1.jpg" style=" width:200px;" class="img-thumbnail" id="my-profile-picture" name="pic">  
                                              </div> 

                                          </div>
                                            

                                            <div class = "row">
                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">出身年月日</span></h4>
                                                <input type="text" value="1992/04/10 "  name="in_st" readOnly><br>
                                              </div>

                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">興趣</span></h4>
                                                <input type="text" value="南方公園"  name="in_ft" readOnly><br>                        
                                              </div>

                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">個性</span></h4>
                                                <input type="text" value="積極進取" name="posttime" readOnly><br>                        
                                              </div>

                                            </div>
                                            <br>
                       
                                                                           
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

                                               <div class="pull-right">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               </div>

                                               <div class="pull-right">
                                                  <img class="media-object" src="./PIC/B1.jpg" style="height: 200px;" class="img-thumbnail" id="my-profile-picture" name="pic">  
                                               </div> 

                                          </div>
                                            

                                            <div class = "row">
                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">出身年月日</span></h4>
                                                <input type="text" value="1992/10/20"  name="in_st" readOnly><br>
                                              </div>

                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">興趣</span></h4>
                                                <input type="text" value="彈吉他、董小姐"  name="in_ft" readOnly><br>                        
                                              </div>

                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">個性</span></h4>
                                                <input type="text" value="熱心助人" name="posttime" readOnly><br>                        
                                              </div>

                                            </div>
                                            <br>
                       
                                            
                                      </div><!--modal body-->
                    <div class="modal-footer">
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
                            
                            <div class="row">
                                               
                                               <div class="pull-right">
                                                  <div class="col-6"  style="WIDTH: 350px;">
                                                    <div class="input-group  ">
                                                        <span class="input-group-addon">Name</span>              
                                                        <input type="text" class="form-control col-6" value="曹家瑞" name="postname" readOnly> 
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
                                                      <input type="text" class="form-control" value="遞茶水" name="in_reward" readOnly>
                                                    </div>
                                                  </div>
                                               </div>

                                                <div class="pull-right">
                                                &nbsp;&nbsp;&nbsp;
                                                </div>

                                               <div class="pull-right">
                                                  <img class="media-object" src="./PIC/C1.jpg" style="height: 200px;" class="img-thumbnail" id="my-profile-picture" name="pic">  
                                               </div>  

                                          </div>
                          
                            <div class = "row">
                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">出身年月日</span></h4>
                                                <input type="text" value="1991/11/20" name="in_st" readOnly><br>
                                              </div>

                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">興趣</span></h4>
                                                <input type="text" value="散步"  name="in_ft" readOnly><br>                        
                                              </div>

                                              <div class="col-lg-4">
                                                <h4><span class="label label-default">個性</span></h4>
                                                <input type="text" value="過分樂觀" name="posttime" readOnly><br>                        
                                              </div>

                                            </div>
                                            <br>
       
                            
                      </div><!--modal body-->
                    <div class="modal-footer">
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
    <script src="tooltip.js"></script>
    <script src="popover.js"></script>
    <script src="tab.js"></script>

    <script>
      $(function (){
         $("#example").popover({placement :'top'});
      });
    </script>

    <script>
      $(function (){
         $("#example2").popover({placement :'top'});
      });
    </script>

    <script>
      $(function (){
         $("#example3").popover({placement :'top'});
      });
    </script>




    <script>
     $('#datetimepicker').datetimepicker({value:'',step:10});
    </script>

    <script>
     $('#datetimepicker2').datetimepicker({value:'',step:10});
    </script>

</html>