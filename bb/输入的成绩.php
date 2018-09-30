<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
	body{background:url(image/10.jpg); no-repeat:font-family:"华文中宋";}
	.box{height:180px; width:480px; border:1px solid #ccc; text-align:left; background-color:white; opacity:0.8;}
	h2{text-align:center;}
	p{padding-left:62px;}
</style>
</head>
<body>
<?php
	$name = '小明';
	$score = 78;
	$str = '';
	if(is_int($score)||is_float($score)){
		if($score >=90 && $score <=100){
			$str = 'A级';
		}elseif($score >=80 && $score<90){
			$str = 'B级';
		}elseif($score>=70&&$score<80){
			$str = 'C级';
		}elseif($score>=60&&$score<70){
			$str = 'D级';
		}elseif($score>=0&&$score<60){
			$str = 'E级';
		}else{
			$str='学生成绩范围必须在0~100！';
		}
	}else{
		$str="输入的成绩不是数值！";
	}
echo "<h2>学生成绩等级</h2><p>学生姓名：".$name."<p>学生分数:".$score."分<p>成绩等级：".$str;
?>
</body>
</html>