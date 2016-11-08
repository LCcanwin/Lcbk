<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="telephone=no" name="format-detection" />
<meta name="Author" content="0431" />
<title>这里是您的网站名称1</title>
<meta name="keywords" content="这里是您的网站名称4" />
<meta name="description" content="这里是您的网站名称" />

<link rel="stylesheet" type="text/css" href="/carshop/Public/mobile/style/subpage.css" />
    
<script type="text/javascript" src="/carshop/Public/mobile/style/jquery.js"></script>
    
  


<style>
.head {
    background: #1a2a38;
}
.foot {
    background: #132330;
}
.nav {
    background: #0152b5 !important
}
.nav_color {
    background: #222;
}
</style>
<script type="text/javascript" src="/carshop/Public/mobile/style/nav.js"></script>
    <script type="text/javascript" src="/carshop/Public/mobile/style/cart_icon.js"></script>
    <script type="text/javascript" src="/carshop/Public/mobile/style/form.js"></script>
    
</head>

<body>


<ul class="nav">
  <li><a href="/index.php/Cnm/Index/index.html" title="首页"><span class="iconfont">&#xe607;</span>首页</a></li><li><a href="/index.php/Cnm/About/index.html" title="关于我们">关于我们</a></li><li><a href="/index.php/Cnm/Zuche/index.html" title="如何租车">如何租车</a></li><li><a href="/index.php/Cnm/Huanche/index.html" title="如何还车">如何还车</a></li><li><a href="/index.php/Cnm/Team/index.html" title="费用说明">费用说明</a></li><li><a href="/index.php/Cnm/Service/index.html" title="优惠活动">优惠活动</a></li><li><a href="/index.php/Cnm/Product/index.html" title="车辆展示">车辆展示</a></li><li><a href="/index.php/Cnm/News/index.html" title="车辆保养">车辆保养</a></li><li><a href="/index.php/Cnm/Contact/index.html" title="联系我们">联系我们</a></li><li><a href="/index.php/Cnm/hr/index.html" title="人才招聘">人才招聘</a></li><li><a href="/index.php/Cnm/Msg/index.html" title="客户评价">客户评价</a></li>  
</ul>
<div class="allpage">
    <div class="black-fixed iconfont">&#xe60f;</div>
 
<div class="header">
    <div class="head">
        <a href="/index.php/Cnm/Index/index.html" title="首页" class="home-btn commonfont">&#xe608;</a>
        <p class="top-title">在线留言</p>
        
        <div class="nav-btn commonfont">&#xe60b;</div>
        
    </div>
</div>   

        <div class="content">
            <p class="red_alert"></p>
            <ul class="login">
              <form method="post" action="/index.php/Cnm/Msg/save.html" name="form1" class="msgForm">
                <li>
                    <input class="login_input" name="title" type="text" id="title" placeholder="标题"/>
                </li>
                <li>
                    <textarea class="login_textarea" name="content" id="content" cols="30" rows="10" placeholder="内容"></textarea>
                </li>
                                <li>
                    <input class="login_input pin_width" id="valid" name="valid" type="text" maxlength="4" placeholder="请输入验证码"/>
                    <img src='/index.php/Cnm/Msg/sendValid.html' id="valid_img" class="login_pin" />
                </li>
                <li>
                    <input class="login_btn common_bg" id="baidu-book" type="submit" value="提   交"/>
                </li>
              </form>
            </ul>
        </div>
    <div class="footer">
    <div class="foot foot-relative" id="foot">
        <div class="foot-relative">
        <a href="/index.php/Cnm/Base/map.html" title="地图">
                        <span class="commonfont">&#xe605;</span>
                        <h3>地图</h3>
                    </a><a href="tel:+86-0000-96877" title="电话">
                        <span class="commonfont">&#xe604;</span>
                        <h3>电话</h3>
                    </a><a href="sms:+86-0000-96877" title="短信">
                        <span class="commonfont">&#xe601;</span>
                        <h3>短信</h3>
                    </a><a href="/index.php/Cnm/Base/share.html" title="分享">
                        <span class="commonfont">&#xe600;</span>
                        <h3>分享</h3>
                    </a>            
            
        </div>
    </div>
</div>
    
    
</div>
<script type="text/javascript">




$(function(){
        
    $("#valid_img").attr('title','点击更换验证码');    
    $("#valid_img").click(function(){
        $("#valid_img").attr('src','/index.php/Cnm/Msg/sendValid.html?r='+Math.random());
        $("#valid")[0].validform_valid = "false";
    });         
        
        
    var objForm=$(".msgForm").Validform({
        tiptype:function(msg,o,cssctl){
            if(o.type==2 && o.obj.attr('name')!='valid'){return ;}
            var objtip=$(".red_alert");
            cssctl(objtip,o.type);
            objtip.text(msg);
        },
        datatype:{
            "zh1-6":/^[\u4E00-\u9FA5\uf900-\ufa2d]{1,6}$/
        },
        dragonfly:true,
        postonce:true,
        showAllError:false
        });
    objForm.tipmsg.w["zh1-6"]="请输入1到06个中文字符！";
    objForm.addRule([{
        ele:"#title",
        datatype:"*1-50",
        nullmsg:"请输入留言标题",
        errormsg:"1-6个字符",
    },
    {
        ele:"#content",
        datatype:"*",
        nullmsg:"请输入留言内容",
    },
    {
        ele:"#nickname",
        datatype:"zh1-6",
        nullmsg:"请输入姓名",
        errormsg:"1-6个汉字",
    },
    {
        ele:"#mobile",
        datatype:"m",
        nullmsg:"请输入手机号码",
        errormsg:"手机号码格式有误",
    },
    {
        ele:"#email",
        datatype:"e",
        nullmsg:"请输入邮箱地址",
        errormsg:"邮箱地址格式有误",
    },
    {
        ele:"#address",
        datatype:"*",
        nullmsg:"请输入详细地址",
    },
    {
        ele:"#valid",
        datatype:"v",
        ajaxurl:"/index.php/Cnm/Msg/ajaxCheckValid.html",
        nullmsg:"请填写验证码",
        errormsg:"验证码长度为4位",
    }
    ]);
})
</script> 
</body>
</html>