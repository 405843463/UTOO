<?php
$activity_name=$_GET['name'];
  $mysql = new mysqli("localhost","root","","Ushouye");
  if ($mysql->connect_errno) {
    die($mysql->connect_errno);
  };
  $mysql->query('set names utf8');
//$sqlstr = 'select * from uto_APP limit 0,18'; 
switch ($activity_name) {
    case "网络游戏":
      $sqlstr = 'select * from uto_APP limit 29,16';
      break;
    case "生活":
      $sqlstr = 'select * from uto_APP limit 16,12';
      break;
    case "购物":
      $sqlstr = 'select * from uto_APP limit 20,40';
      break;
    case "理财":
      $sqlstr = 'select * from uto_APP limit 1,19';
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
 