<!DOCTYPE html>
<html>
<head>
<title>CSVデータ表示</title>
<meta charset="UTF-8">
</head>
<body>

<table border='1'>
<tr><th>時間</th><th>名前</th><th>メアド</th><th>歌手</th><th>曲名</th><th>点数</th></tr>

<?php

if( ($fp = fopen("data.csv","r"))=== false ){
	die("CSVファイル読み込みエラー");
}

while (($array = fgetcsv($fp)) !== FALSE) {
	
	//空行を取り除く
	if(!array_diff($array, array(''))){
		continue;
	}
	
	echo "<tr>";
	for($i = 0; $i < count($array); ++$i ){
		$elem = nl2br($array[$i]);
		$elem = $elem === "" ?  "&nbsp;" : $elem;
		echo("<td>".$elem."</td>");
	}
	echo "</tr>";
	
}

fclose($fp);
?>
 
</table>

</body>
</html>