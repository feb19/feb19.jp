<?php

//DBに接続
$heteml_hostname = "mysql20.heteml.jp";
$heteml_username = "_feb19";
$heteml_password = "dw32ff4a";
$heteml_dbname = "_feb19";
$db_connect = mysql_connect($heteml_hostname, $heteml_username, $heteml_password);
mysql_select_db($heteml_dbname, $db_connect);

//一ヵ月前の日付
$lastmonth = date("Y-m-d H:i:s",strtotime("-1 month"));

//一週間前の日付
$lastweek = date('Y-m-d H:i:s', strtotime('-1 Week'));

//一日前の日付
$yesterday = date("Y-m-d H:i:s",strtotime("-1 day"));

//DBからデータを10件一日以内のスコア順で呼び出す
$sql1 = "select * from eitan1 order by score desc limit 0, 10";
$resource1 = mysql_query($sql1);


echo "{'ranking':[";

//Flashで読み取れるJSON形式に変換
// echo 'daily=';
$i = 0;
while ( $row = mysql_fetch_assoc($resource1) )
{
echo "{";
  echo "'id':".($i+1).",";
	if($i == 0)
	{
		echo "'name':".$row['name'].",'score':".$row['score'];
		//echo '{"date": '.$row['date'].', "name": '.$row['name'].', "score": '.$row['score'].', "wrong": '.$row['wrong'].', "correct": '.$row['correct'].', "clear": '.$row['clear'].'}';
	}
	else
	{
		echo "{'name':".$row['name'].",'score':".$row['score'];
		//echo ', {"date": '.$row['date'].', "name": '.$row['name'].', "score": '.$row['score'].', "wrong": '.$row['wrong'].', "correct": '.$row['correct'].', "clear": '.$row['clear'].'}';
	}
	
	$i++;
echo "},";
}

echo "]}";


mysql_close($db_connect);



?>