
<?php
include("postdb.php");                    //�פJdb.php�ɮ�
/* ��������� */
$topic=$_POST["in_topic"];
$location=$_POST["in_location"];
$reward=$_POST["in_reward"];
$st=$_POST["in_st"];
$ft=$_POST["in_ft"];
$des=$_POST["in_des"];

var_dump($topic);

/* �N����Ƹ�J��Ʈw */
$sql="INSERT post(name,id,topic,location,description,starttime,deadline)
      Values('$name','$id','$in_topic','$in_location','$in_des','$in_st','$in_ft')";
mysql_query($sql);
?>

