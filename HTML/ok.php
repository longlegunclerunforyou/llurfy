
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
$posttime=$_POST["posttime"];

 $id = $_COOKIE["my_facebook_id"];
 $name = $_COOKIE["my_username"];
 $pic = $_COOKIE["my_picture_url"];

var_dump($postname);

/* ±NÄæ¦ì¸ê®Æ¸ê¤J¸ê®Æ®w */
// $sql="UPDATE job(postername,posterid,topic,location,reward,description,starttime,deadline,receiveid)
//       Values('$postname','$fb_id','$topic','$location','$reward','$des','$st','$ft','$id')";
// mysql_query($sql);

$datetime = date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ; 

$sql2=" UPDATE job SET ok = '1' , finishtime = '$datetime' where posttime = '$posttime' AND postername = '$postname'" ;
var_dump($datetime);
mysql_query($sql2);


echo "<script>document.location.href='myjob.php'</script>";

//DELETE FROM `post` WHERE `starttime` ='2015-04-15 05:03:00'AND `name` = 'jiarui.cao'
?>

