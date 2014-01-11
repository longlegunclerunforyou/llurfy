
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


 $id = $_COOKIE["my_facebook_id"];
 $name = $_COOKIE["my_username"];
 $pic = $_COOKIE["my_picture_url"];

var_dump($postname);

/* 將欄位資料資入資料庫 */
$sql="INSERT job(postername,posterid,topic,location,reward,description,starttime,deadline,receiveid)
      Values('$postname','$fb_id','$topic','$location','$reward','$des','$st','$ft','$id')";
mysql_query($sql);

$sql2=" DELETE FROM `post` WHERE starttime = '$st' AND `name` = '$postname'" ;
mysql_query($sql2);

echo "<script>document.location.href='main.php'</script>";

//DELETE FROM `post` WHERE `starttime` ='2015-04-15 05:03:00'AND `name` = 'jiarui.cao'
?>

