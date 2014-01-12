
<?php
include("postdb.php");                    //匯入db.php檔案
/* 接收表單資料 */

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
 // var_dump($name);
 //$pic = $_COOKIE["my_picture_url"];


/* 將欄位資料資入資料庫 */
$sql0=" select  * FROM `post` WHERE posttime = '$posttime' AND `name` = '$postname'" ;

$result = mysql_query($sql0);
list($postid,$postername,$fb_id,$topic,$location,$reward,$des,$post_time,$start_time,$finish_time,$pic) = mysql_fetch_row($result);

$sql="INSERT job(postername,posterid,topic,location,reward,description,posttime,starttime,deadline,receiveid,receivename,pic)
      Values('$postname','$fb_id','$topic','$location','$reward','$des','$post_time','$st','$ft','$id','$name','$pic')";
mysql_query($sql);



$sql2=" DELETE FROM `post` WHERE posttime = '$posttime' AND `name` = '$postname'" ;
mysql_query($sql2);

 echo "<script>document.location.href='main.php'</script>";

//DELETE FROM `post` WHERE `starttime` ='2015-04-15 05:03:00'AND `name` = 'jiarui.cao'
?>

