
<?php
include("postdb.php");                    //�פJdb.php�ɮ�
/* ��������� */
$topic=$_POST["in_topic"];
$location=$_POST["in_location"];
$reward=$_POST["in_reward"];
$st=$_POST["in_st"];
$ft=$_POST["in_ft"];
$des=$_POST["in_des"];


 $id = $_COOKIE["my_facebook_id"];
 $name = $_COOKIE["my_username"];
 $pic = $_COOKIE["my_picture_url"];

 $datetime = date ("Y-m-d H:i:s" , mktime(date('H')+13, date('i'), date('s'), date('m'), date('d'), date('Y'))) ; 

/* �N����Ƹ�J��Ʈw */
$sql="INSERT post(name,id,topic,location,reward,description,posttime,starttime,deadline,pic)
      Values('$name','$id','$topic','$location','$reward','$des','$datetime','$st','$ft','$pic')";
mysql_query($sql);

$sql2="SELECT posttime FROM post";
var_dump($sql2);

echo "<script>document.location.href='main.php'</script>";

?>

