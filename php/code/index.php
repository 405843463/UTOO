<?php
$activity_name=$_GET['name'];
  $mysql = new mysqli("localhost","root","","Ushouye");
  if ($mysql->connect_errno) {
    die($mysql->connect_errno);
  };
  $mysql->query('set names utf8');
switch ($activity_name) {
    case "游戏":
      $sqlstr = 'select * from uto_APP limit 2,28';
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
 