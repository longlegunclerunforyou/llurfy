<?php
/**********************************************************************
使用說明：
雖然這些話都很官腔，不過我還是稍微提醒一下各位。

本 Facebook 應用程式範例檔僅供使用者學習用且為免費授權，但若因本程式而造成您的電腦或資料有所損毀（基本上是不太可能），本範例檔作者不負任何賠償責任。
歡迎將本範例檔轉載給其他有需要的使用者學習，轉載時請註明範例檔來源以達成作者與轉載者雙贏的局面。

範例檔製作者：Sephiroth
作者網站：http://streamer-forest.tw/

若您有其他製作上的相關疑問的話，可以拜訪作者網站並查詢相關教學文章。
本站有一系列 Facebook 應用程式的相關教學，有問題也可以透過網站文章內的迴響功能向作者發問並獲得解答。

感謝您對『北極光森林（http://streamer-forest.tw/）』的支持！


好了，官方聲明就到這邊，開始你的 Facebook APP 學習之旅吧！
**********************************************************************/
//匯入 FB API 檔案
require './fb-library/src/facebook.php';

//定義基本組態設定值
$config=array();
$config['appId']='203832003153010';	//你的應用程式 ID
$config['secret']='640fc123cebd248cb910c0f821588545';	//你的應用程式密鑰

/***************************************/

//用 $config 的值來宣告 $facebook 物件，$config 的部分也能直接用陣列寫入數值
$facebook = new Facebook($config);

//取得使用者 ID
$user = $facebook->getUser();

if ($user) {
  try {
    // 處理使用者是否有通過驗證並登入
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);	//若發生錯誤的話，將錯誤資訊寫入錯誤日誌裡
    $user = null;
  }
}

$ThunderValue=array(0,25,50,75,100);	//定義雷擊機率值，也可以用0~100的純亂數選擇，但這邊只使用5種數值。
$RandomProb=array_rand($ThunderValue);	//隨機抽取 $ThunderValue 陣列內的索引值

//用 switch 判斷亂數選到的雷擊機率並將相對應的訊息存入 $msg
switch($ThunderValue[$RandomProb])
{
	case 0:
		$msg='恭喜你！你今天完全與打雷無緣喔！<br />現在想想，這也是理所當然的事。';
		break;
	case 25:
		$msg='神奇寶貝大師小智建議您<br />出門時應穿著防雷擊裝備<br />或是別把皮卡丘帶出門！';
		break;
	case 50:
		$msg='您被雷劈的機率簡直就跟擲銅板<br />一樣！出門前可以擲筊以求個心安！';
		break;
	case 75:
		$msg='這...我認為你還是暫時別出門好了。';
		break;
	case 100:
		$msg='恭喜你獲得『移動引雷針』的成就！<br />你今天可以考慮去發電廠打工一天唷！';
		break;
	default:
		$msg='因系統被雷擊，導致分數錯誤！';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>你今天會被雷劈到的機率是多少？</title>
<style type="text/css">
.tb {
	font-weight: bold;
	font-size: 24px;
}
.msg {
	font-weight: bold;
	font-size: 20px;
	color: #F30;
}
</style>
<script language='javascript' type='text/javascript' src='./fb-library/fb-js-sdk.js'></script>
<script>
function postToFeed() {
// 呼叫 API ...
var tb="<?=$ThunderValue[$RandomProb];?>";	//宣告 tb 變數來取得前面 PHP 所產生的隨機雷擊機率值
var obj = {
  method: 'feed',	//API 執行方法，由於我們要將資訊張貼至塗鴉牆，所以使用 feed 
  link: 'http://apps.facebook.com/thunder-probability/',	//應用程式連結，也就是您的應用程式網址
  picture: 'http://i.minus.com/iXzxDL4W59RSV.jpg',	//代表圖片，選個能代表你應用程式的圖片並顯示給使用者看
  name: '我今天會被雷擊的機率為 '+tb+' ％！那你呢？',	//應用程式名稱，也可當作是塗鴉牆訊息的標題
  caption: '天有不測風雲，人有旦夕禍福',	//標題，但階級小於 name，可當作子標題或簡短說明區使用
  description: "想知道你今天被雷擊的機率嗎？趕快來測試一下！"	//敘述說明，允許較長的應用程式說明
};

//定義回傳使用者動作的函數
function callback(response) {
	if(response)	//檢查使用者是否有將資訊張貼至塗鴉牆
	{
		alert('已將結果發佈到你的塗鴉牆上！');	//如果有的話，跳出這行代碼所設定的訊息視窗告知使用者資料已被張貼至塗鴉牆
	}
	window.open("http://www.facebook.com/",'_parent');	//此行代碼為選填，無論使用者是否有將資訊張貼至塗鴉牆，都自動返回至 Facebook 首頁。
}

FB.ui(obj, callback);	//根據前面對 obj 和 callback 的定義來呼叫 FB.ui 以顯示『張貼至塗鴉牆』的互動面板
}

</script>
</head>

<body>
<div id='fb-root'></div>
<table align="center" width="466" height="242" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<th scope="col"><img src="pikachu.jpg" width="520" height="278" /></th>
	</tr>
	<tr>
		<th scope="row"><strong class="tb">您今天會被雷劈到的機率為
			<font color='red'><?=$ThunderValue[$RandomProb];?></font>
		％！</strong></th>
	</tr>
	<tr>
		<th class="msg" scope="row"><?=$msg;?></th>
	</tr>
	<tr>
		<th class="msg" scope="row"><a href="#" onclick="postToFeed(); return false;">將結果發佈到塗鴉牆！</a></th>
	</tr>
</table>
</body>
</html>