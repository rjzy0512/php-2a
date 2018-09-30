<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	/*echo date('Y-m-d H:i:s');
	const pai=3.14;
	$f1=true;
	$f2=false;
	
	echo $f2;
	$octonary = 073;
	$sexadecimal = 0x3b;
	echo $octonary;
	print "<br>";
	echo $sexadecimal;
	
	$string1="输出双引号\"";
	$string2='输出单引号\'';
	echo $string1,"<br>",$string2;
	
	
	$name = 'Tom';
	$area = 'China';
	echo $name."come from $area";
	print "</br>";
	echo $name.'come from $area';
	
	echo <<<abc
	ajdhjhadha
	adlksjlkdj
	ajdskjnsakdj
abc;
	$f1="香蕉";
	$f2="苹果";
	$f3="橘子";
	$f1_n=3;
	$f2_n=2;
	$f3_n=4;
	$f1_p=6.5;
	$f2_p=4.95;
	$f3_p=5.84;
	$t=$f1_n*$f1_p+$f2_n*$f2_p+$f3_n*$f3_p;
	$str=<<<st
	<table border="1">
		<tr>
			<td>$f1</td><td>$f1_n</td><td>$f1_p</td>
		</tr>
		<tr>
			<td>$f2</td><td>$f2_n</td><td>$f2_p</td>
		</tr>
		<tr>
			<td>$f3</td><td>$f3_n</td><td>$f3_p</td>
		</tr>
		<td colspan="3">$t</td>
		<tr>
		</tr>
		</table>
st;
echo $str;

	$a=5;
	$b="5";
	echo   $a==$b;
	
	$a=4;
	$b=5;
	echo ($a<$b) && ($b=30);
	echo $b;
	
	
	$a=4;
	$b=5;
	if($a>$b)
		$max=$a;
	else
		$max=$b;
	echo "$a 与$ b中的大数是$max";
	
	$weekday=date("D");
	echo "今天是:$weekday<br>";
	
	if($weekday=="Fri")
		echo "是周末！";
	else	
		echo "不是周末！";
		
	$month=date("m");
	echo "今天是:$month<br>";
	
	if($mont<=6)
		echo "是$m月，是下半年";
	else	
		echo "是$m月，是上半年";*/
	
	$p=date("w");
	print date("y年m月d日");	
	switch($p)
	{
		case 0:
			print "星期日";
			break;
		case 1:
			print "星期一";
			break;
		case 2:
			print "星期二";
			break;
		case 3:
			print "星期三";
			break;
		case 4:
			print "星期四";
			break;
		case 5:
			print "星期五";
			break;
		case 6:
			print "星期六";
			break;
		}
	print date(" h:i:s");
	print "<br>";
		
?>
</body>
</html>