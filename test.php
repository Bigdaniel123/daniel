<?php
	header("content-type:test/html;charset=utf-8");
	/*第一个实例：简单日历*/
$days = 31;
echo"<table width='700px' border='1px'>";

	for($i=1;$i<=$days;){
		echo"<tr>";
			for($j=0;$j<7;$j++){
				if($i>$days){
					echo"<td>&nbsp</td>";
				}else{
					echo"<td>{$i}</td>";
					$i++;
				}

			}
		echo"</tr>";
	}

echo"</table>";


	echo"<hr>";

	/*第二个实例:九九乘法表*/
	/*大循环九次，小循环根据变量*/
	echo"<table>";
	for($i = 1;$i<9;$i++){
		echo"<tr>";
			for($j=1;$j<=$i;$j++){
				echo"<td>$j*$i=($j*$i)</td>";
			}
		echo"</tr>";
	}
	echo"</table>";

	echo"<hr>";

	/*第三个实例：递归*/


	/*万年历*/
	/*1.几年几月几日
	2.周日。周六
	3.这个月有多少天
	4.下年和上一年
	5.下个月和上个月*/

	/*获取当前年*/
	$y = $_GET['y']?$_GET['y']:date('Y');
	/*获取当前月*/
	$m = $_GET['m']?$_GET['m']:date('m');
	//当前月有几天
	$days = @date('t',strtotime("{$y}{$m}1"));
	$week = date('w',strtotime("{$y}-{$m}-1"));


