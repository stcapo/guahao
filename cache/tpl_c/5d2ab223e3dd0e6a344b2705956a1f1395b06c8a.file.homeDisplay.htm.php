<?php /* Smarty version Smarty-3.1.8, created on 2012-07-06 16:48:55
         compiled from "tpl/default\homeDisplay.htm" */ ?>
<?php /*%%SmartyHeaderCode:85954ff6a677c47516-70476061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d2ab223e3dd0e6a344b2705956a1f1395b06c8a' => 
    array (
      0 => 'tpl/default\\homeDisplay.htm',
      1 => 1340677900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85954ff6a677c47516-70476061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
    'imgDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff6a677ca1584_68347893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff6a677ca1584_68347893')) {function content_4ff6a677ca1584_68347893($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="copyright" content="www.mlinseo.com"> 
<title><?php echo $_smarty_tpl->tpl_vars['cfg']->value['sitename'];?>
</title>
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['imgDir']->value;?>
style.css" rel="stylesheet" />
<script type="text/javascript" src="lib/images/jquery.js?v=172"></script>
<script type="text/javascript" src="lib/images/common.js"></script>
</head>

<body>
<div id="home">
  <div class="intro">
    <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['imgDir']->value;?>
logo.jpg"  /></div>
    <div class="txt">
      <h2>医院介绍</h2>
      <div>
        <p>
          广西壮族自治区人民医院位于南宁市风景秀丽的邕江之滨，南湖之畔。始建于1941年，经几代人不懈努力，现已发展成为一所以医疗为主，兼有科研、教学和预防保健为一体的大型综合性省级三级甲等医院，是广西的医疗中心。医院设有一个分院、两个门诊部和附属卫校。医院占地面积21.225万平方米（其中分院14.766万平方米），建筑面积21.85万平方米，医疗建筑面积12.95万平方米。</p>
           <p>
          设有临床、医技科室57个、3个广西重点学科、4个广西重点建设学科、18个省级医疗中心和13个院级重点学科。在职职工2658人，其中卫生技术人员2190人，高级卫技人员396人，博士、硕士409人，开放床位1813（院部1657﹢分院156）张，年门急诊量168.6万人次，住院病人4.7万人次，住院手术2.3万多人次。总资产18亿元，其中固定资产14.82亿元。 
        </p>
      </div>
    </div>
  </div>
  <div class="login">
    <h2>用户登录</h2>
    <form action="?m=user&o=login" method="post">
    <table cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td>卡号：</td>
        <td><input type="text" name="uid" class="text"  /></td>
      </tr>
      <tr>
        <td>姓名：</td>
        <td><input type="text" name="truename" class="text"/></td>
      </tr>
        <tr>
          <td>验证码：</td>
          <td valign="middle"><input type="text" class="checknum" name="checknum" value="" /> <a href="javascript:getCheckNum();" title="看不清？点击更换"><img id="checkImg" src="?m=ajax&o=checknum" /></a></td>
        </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="登录在线预约系统" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><a href="?m=user&o=reg">没有卡号？在线注册</a></td>
      </tr>
    </tbody>
    </table>
    </form>
  </div>
</div>
</body>
</html><?php }} ?>