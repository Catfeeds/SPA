<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link href="/minijunxishanhgnz/Public/ht/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="aaa_pts_show_1">【 管理首页 】</div>

<div class="aaa_pts_show_2">
    
    <div>
       <div class="aaa_pts_4">用户信息</div>
    </div>
    <div class="aaa_pts_3">
      <ul class="aaa_pts_show_6">
        <li>用户名：  <font><?php echo $_SESSION["admininfo"]['name'] ?></font></li>
        <li>您备案的：<font class="r1" style="color:#090"><?php echo $_SESSION["system"]['sysname'] ?></font></li>
        <li>负责人：  <font class="r1"><?php echo $_SESSION["system"]['name'] ?></font></li>
      </ul>
    </div>
    
</div>

</body>
</html>