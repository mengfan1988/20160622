﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
</head>
<body>

<ul id="test"><li>JavaScript</li><li>HTML</li></ul> 
 
<script type="text/javascript">

  var otest = document.getElementById("test");  
  var oop=document.createElement('li');
  var new1=document.getElementsByTagName('li')[1];
  oop.innerHTML='PHP';
  otest.insertBefore(oop,new1);
  
  
  
</script> 

</body>
</html>