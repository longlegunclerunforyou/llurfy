
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

/* �N����Ƹ�J��Ʈw */
$sql="INSERT post(name,id,topic,location,reward,description,starttime,deadline)
      Values('$name','$id','$topic','$location','$reward','$des','$st','$ft')";
mysql_query($sql);

echo "<script>document.location.href='main.php'</script>";

?>

