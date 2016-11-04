<?php
$activity_name=$_GET['name'];
  $mysql = new mysqli("localhost","root","","Ushouye");
  if ($mysql->connect_errno) {
    die($mysql->connect_errno);
  };
  $mysql->query('set names utf8');
//$sqlstr = 'select * from uto_APP limit 0,18'; 
switch ($activity_name) {
    case "全部应用":
      $sqlstr = 'select * from uto_APP limit 9,18';
      break;
    case "办公":
      $sqlstr = 'select * from uto_APP limit 1,13';
      break;
    case "教育":
      $sqlstr = 'select * from uto_APP limit 16,10';
      break;
    case "生活":
      $sqlstr = 'select * from uto_APP limit 22,17';
      break;
    case "安全":
      $sqlstr = 'select * from uto_APP limit 8,14';
    break;
    case "旅游":
      $sqlstr = 'select * from uto_APP limit 22,18';
      break;
    case "儿童":
      $sqlstr = 'select * from uto_APP limit 29,18';
      break;
    case "理财":
      $sqlstr = 'select * from uto_APP limit 16,12';
      break;
    case "系统":
      $sqlstr = 'select * from uto_APP limit 22,17';
      break;
    case "健康":
      $sqlstr = 'select * from uto_APP limit 1,14';
    break;
    case "娱乐":
      $sqlstr = 'select * from uto_APP limit 9,18';
      break;
    case "视频":
      $sqlstr = 'select * from uto_APP limit 7,13';
      break;
    case "音乐":
      $sqlstr = 'select * from uto_APP limit 10,12';
      break;
    case "通讯":
      $sqlstr = 'select * from uto_APP limit 22,17';
      break;
    case "购物":
      $sqlstr = 'select * from uto_APP limit 30,41';
    break;
    case "阅读":
      $sqlstr = 'select * from uto_APP limit 11,10';
      break;
    case "导航":
      $sqlstr = 'select * from uto_APP limit 9,13';
      break;
    case "社交":
      $sqlstr = 'select * from uto_APP limit 16,10';
      break;
    case "摄影":
      $sqlstr = 'select * from uto_APP limit 22,17';
      break;
    case "新闻":
      $sqlstr = 'select * from uto_APP limit 20,14';
    break;
    case "工具":
      $sqlstr = 'select * from uto_APP limit 18,11';
      break;
    case "美化":
      $sqlstr = 'select * from uto_APP limit 15,14';
      break;
      case "游戏":
      $sqlstr = 'select * from uto_APP limit 18,11';
      break;
    case "应用":
      $sqlstr = 'select * from uto_APP limit 15,14';
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
 