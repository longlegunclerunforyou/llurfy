<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<!-- Creation Date: <?=Date("d/m/Y")?> -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<meta name="Generator" content="Dev-PHP 1.9.4">
<title>列出所有留言</title>
</head>
<body>
<a href="board.php">寫寫留言</a><p>
<?php
include("db.php");
/* 計算資料筆數 */
$rows=mysql_query("select * from guestbook");
$total=mysql_num_rows($rows);
$show=ceil($total/5);                  //每頁顯示5筆
echo "共".$total."筆留言<p>";
/* 查詢欄位資料 */
$page=$_GET["page"];                        //以$_GET變數取得頁數
if(empty($page))$page=1;                    //如果$page為空則設定為1
$start=5*($page-1);                         //計算讀取的起點

/* 跳頁顯示 */
echo " <a href=view.php?page=1>第一頁</a>";
if($page>1)                                     //目前頁數大於1顯示上一頁
{
$pre=$page-1;                                  //上一頁公式
echo " <a href=view.php?page=$pre>上一頁</a>";
}
if($page<$show)                                  //總頁數小於目前頁數則
{
 $next=$page+1;                                      //下一頁公式
 echo " <a href=view.php?page=$next>下一頁</a>";
}
if ($show>=3)                                      //如果總頁數大於等於3
 echo " <a href=view.php?page=$show>最後一頁</a>";
 echo  " 目前在第".$page."頁";

/* 顯示資料庫資料 */
$sql="select * from guestbook order by no desc limit $start,5";
$result=mysql_query($sql);
while (list($no,$name,$mail,$subject,$content,$putdate)
      =mysql_fetch_row($result))
{
echo "<p>留言主題:".$subject;
echo "<br>訪客姓名:".$name;
echo "<br>E-mail:<a href=mailto:$mail>".$mail."</a>";
echo "<br>留言內容:".nl2br($content);
echo "<br>留言時間:".$putdate;
echo "<hr>";
}
?>
</body>
</html>
