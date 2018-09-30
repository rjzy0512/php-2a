<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>



<body>
<?php
function getMax($num1,$num2){
	$max=$num1>$num2?$num1:$num2;
	return $max;
	
	
	
	}
	$rst=getMax(3,5);
	echo $rst;
	$a=1;
	$b=2; 
	$a+$b=$c;
	echo $c;
	
function add($a,$b){
	return $a+$b;
	
	}
	echo $a+$b;
function  circle_area($radius){//计算圆面积
	$area=$radius*$radius*m_pi;
	return $area;
	}	//自定义
	echo circle_area(2);//半径为2
	var_dump(sting('abc'));
	str_replace();//字符串函数
	explode();//函数可以使用一个字符串分割另外一个字符串
	           
	$path="";//地址
	$ext_pos=strpos($path,'.')+1;
	$ext=substr($path,$ext_pos);
	echo "扩展名",$ext;
	
?>

</body>
</html>