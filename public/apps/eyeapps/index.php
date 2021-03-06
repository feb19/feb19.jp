<!doctype html>
<html lang="ja" xml:lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width" id="viewport" />
		<meta name="format-detection" content="telephone=no" />
		<title>Apps - feb19.jp</title>
		<meta name="author" content="Nobuhiro Takahashi" />
		<meta name="copyright" content="Copyright (C) Nobuhiro Takahashi" />
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/icon-precomposed.png">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta property="og:title" content="Apps - feb19.jp"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://feb19.jp/apps/"/>
		<meta property="og:locale" content="ja_JP" />
		<meta property="og:image" content="http://feb19.jp/feb19.png"/>
		<meta property="og:description" content="Apps - feb19.jp" />
		<meta name="verify-v1" content="vD8IgU8S0N+As+Pkh2lzge1hEWTNMxDIwTtHI/jWPp0=" />
		<meta name="google-site-verification" content="VQvL2RssCVXjvmYtya-haG8L3Pt21ipSGAuRsosRjMs" />
        <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/css/application.css">
		<link rel="stylesheet" href="/css/font-awesome.min.css">
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@feb19" />
		<meta name="twitter:title" content="Apps - feb19.jp" />
		<meta name="twitter:description" content="feb19.jp" />
		<meta name="twitter:image" content="http://feb19.jp/feb19.png" />
		<meta name="twitter:url" content="http://feb19.jp/apps/" />
	</head>
	
	<body>
		<div class="wrapper">
			<header>
				<h1><a href="/">feb19.jp</a></h1>
				<h2>
					Nobuhiro Takahashi<br>
					Designer / Engineer
				</h2>
			</header>
			<ul class="gnav">
				<li><a href="/about">About</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="http://snippets.feb19.jp">Snippets</a></li>
				<li><a href="/apps">Apps</a></li>
				<li><a href="http://meditation-records.com">Music</a></li>
			</ul>
			
			<div class="content">
				<section>
  				<h1>Ranking: EyeApps / Denying</h1>
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


echo "<table>";

//Flashで読み取れるJSON形式に変換
// echo 'daily=';
$i = 0;
while ( $row = mysql_fetch_assoc($resource1) )
{
echo "<tr>";
  echo "<td>".($i+1)."</td>";
	if($i == 0)
	{
		echo "<td>".$row['name']."</td><td>".$row['score']."</td>";
		//echo '{"date": '.$row['date'].', "name": '.$row['name'].', "score": '.$row['score'].', "wrong": '.$row['wrong'].', "correct": '.$row['correct'].', "clear": '.$row['clear'].'}';
	}
	else
	{
		echo "<td>".$row['name']."</td><td>".$row['score']."</td>";
		//echo ', {"date": '.$row['date'].', "name": '.$row['name'].', "score": '.$row['score'].', "wrong": '.$row['wrong'].', "correct": '.$row['correct'].', "clear": '.$row['clear'].'}';
	}
	
	$i++;
echo "</tr>";
}

echo "</table>";


mysql_close($db_connect);



?>
				</section>
				<section>
    			<ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>
    				<li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/apps" itemprop="url"><span itemprop="title">Apps</span></a></li>
    			</ul>
				</section>
			</div>
			
			<footer>
				<div class="grid">
					<h2>Menu</h2>
					<ul>
						<li><a href="/about">About</a></li>
						<li><a href="/blog">Blog</a></li>
						<li><a href="http://snippets.feb19.jp">Snippets</a></li>
						<li><a href="/apps">Apps</a></li>
						<li><a href="http://meditation-records.com">Music</a></li>
					</ul>
				</div>
				<div class="grid">
					<h2>Works</h2>
					<ul>
						<li><a href="http://feb19.jp/apps/tuner">Tuner</a></li>
						<li><a href="https://repertoryapp.com">Repertory</a></li>
						<li><a href="http://moshapp.me">Mosh!</a></li>
						<li><a href="http://freepianoscore.com/">Free Piano Score</a></li>
						<li><a href="http://feb19.jp/apps/notes/">Notes Quiz</a></li>
						<li><a href="http://nobuhirotakahashi.com/trackname/">TrackName for iTunes</a></li>
						<li><a href="http://feb19.jp/pp/">points-pointz</a></li>
						<li><a href="http://meditation-records.com/meditation">Meditation</a></li>
					</ul>
				</div>
				<div class="grid">
					<h2>SNS</h2>
					<ul>
						<li><a href="https://twitter.com/feb19" target="_blank">Twitter</a></li>
						<li><a href="https://github.com/feb19/" target="_blank">GitHub</a></li>
						<li><a href="https://instagram.com/feb19/" target="_blank">Instagram</a></li>
						<li><a href="https://jp.pinterest.com/feb19nt/" target="_blank">Pinterest</a></li>
						<li><a href="http://qiita.com/feb19" target="_blank">Qiita</a></li>
						<li><a href="https://vine.co/feb19" target="_blank">Vine</a></li>
						<li><a href="https://itunes.apple.com/jp/artist/nobuhiro-takahashi/id433066240" target="_blank">iTunes</a></li>
						<li><a href="https://soundcloud.com/nobuhiro-takahashi" target="_blank">Soundcloud</a></li>
					</ul>
				</div>
			</footer>
		</div>
	</body>
</html>