<?php
$activity_name=$_GET['name'];
  $mysql = new mysqli("localhost","root","","Ushouye");
  if ($mysql->connect_errno) {
    die($mysql->connect_errno);
  };
  $mysql->query('set names utf8');
//$sqlstr = 'select * from uto_APP limit 0,18'; 
switch ($activity_name) {
    case "全部游戏":
      $sqlstr = 'select * from uto_APP limit 9,18';
      break;
    case "休闲益智":
      $sqlstr = 'select * from uto_APP limit 1,13';
      break;
    case "动作冒险":
      $sqlstr = 'select * from uto_APP limit 16,10';
      break;
    case "棋牌中心":
      $sqlstr = 'select * from uto_APP limit 22,17';
      break;
    case "飞行射击":
      $sqlstr = 'select * from uto_APP limit 8,14';
    break;
    case "经营策略":
      $sqlstr = 'select * from uto_APP limit 22,18';
      break;
    case "角色扮演":
      $sqlstr = 'select * from uto_APP limit 29,18';
      break;
    case "体育竞速":
      $sqlstr = 'select * from uto_APP limit 16,12';
      break;
    default:
      break;
}
  $result=$mysql->query($sqlstr);
  $myArray = array();
 while($record = $result->fetch_assoc()){
   array_push($myArray,$record);
   };
  $a = json_encode($myArray);
  echo $a;

 ?>
 