<?php
   // echo date(); //至少要有一个参数
   echo date('d'); //day
   echo "<hr>";
   echo date('m'); //month
   echo date('Y'); //year2017
   echo date('y'); //17 
   echo date('l'); //day of week
   echo "<hr>";
   echo date('Y/m/d'); //年月日
   echo "<hr>";
   echo date('d-m-Y'); //日月年

   //时分秒
   echo date('h'); //hour
   echo date('i'); //minutes
   echo date('s'); //seconds
   echo "<hr>";
   echo date('a'); //am or pm
   
   //设置时区
   date_default_timezone_set("Asia/Shanghai");
   echo date('h:i:sa');

   //maketime
   echo "<hr>";
   $timestamp=mktime(07,00,12,1,24,1988);
   echo $timestamp;

   //完整的时间
   echo "<hr>";
   echo date("m/d/Y h:i:sa",$timestamp);
   
   //字符串转时间戳
   echo "<hr>";
   $timestamp2=strtotime("7:00pm March 22 2016");
   $timestamp3=strtotime("tomorrow");
   $timestamp4=strtotime("next sunday");
   $timestamp5=strtotime("+2 Days");
   echo date("m/d/Y h:i:sa",$timestamp3);
   echo "<hr>";
   echo date("m/d/Y h:i:sa",$timestamp4);
   echo "<hr>";
   echo date("m/d/Y h:i:sa",$timestamp5);
   echo "<hr>";
   echo $timestamp2;
  ?>