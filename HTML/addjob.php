
<?php
include("postdb.php");                    //¶×¤Jdb.phpÀÉ®×
/* ±µ¦¬ªí³æ¸ê®Æ */
$postname=$_POST["postname"];
$fb_id=$_POST["fb_id"];
$topic=$_POST["in_topic"];
$location=$_POST["in_location"];
$reward=$_POST["in_reward"];
$st=$_POST["in_st"];
$ft=$_POST["in_ft"];
$des=$_POST["in_des"];
$pic = $_POST["pic"];


$id = $_COOKIE["my_facebook_id"];
$name = $_COOKIE["my_username"];
  


/* ±NÄæ¦ì¸ê®Æ¸ê¤J¸ê®Æ®w */
$sql="INSERT job(postername,posterid,topic,location,reward,description,starttime,deadline,receivedid)
      Values('$postname','$fb_id','$topic','$location','$reward','$des','$st','$ft','$id')";
mysql_query($sql);

//$sql2 = "DELETE FROM job where postid='".$postid"'";

echo "<script>document.location.href='main.php'</script>";

?>

