<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link href="/minijunxishanhgnz/Public/ht/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/minijunxishanhgnz/Public/ht/js/jquery.js"></script>
<script type="text/javascript" src="/minijunxishanhgnz/Public/ht/js/action.js"></script>
</head>
<body>

<div class="aaa_pts_show_1">【 管理员管理 】</div>

<div class="aaa_pts_show_2">
    
    <div>
       <div class="aaa_pts_4"><a href="index">管理员管理</a></div>
    </div>
    <div class="aaa_pts_3">
      <form action="?id=<?php echo ($id); ?>" method="post" onsubmit="return ac_from();">
      <ul class="aaa_pts_5">
         <li>
            <div class="d1">登陆账号:</div>
            <div>
              <input class="inp_1" name="name" id="name" value="<?php echo ($adminuserinfo["name"]); ?>"/>
            </div>
         </li>
         <li>
            <div class="d1">用户密码:</div>
            <div>
              <input class="inp_1" name="password" id="password" />
            </div><span style="color:red;font-size: 12px;">&nbsp;&nbsp;请输入6位及6位以上数字或英文组合的密码</span>
         </li>
         <li><input type="submit" name="submit" value="提交" class="aaa_pts_web_3" border="0">
            <input type="hidden" name="admin_id" value="<?php echo ($adminuserinfo["id"]); ?>">
         </li>
      </ul>
      </form>
         
    </div>
    
</div>
<script>
function ac_from(){
  var name=document.getElementById('name').value;
  if(!name){
	  alert('请输入登录账号！');
	  return false;
	}
  
  if(!<?php echo $id; ?>){
	  var password=document.getElementById('password').value;
	  if(password.length<6){
		  alert('密码长度不能少于6');
		  return false;
		  }  
  }
  
}
</script>
</body>
</html>