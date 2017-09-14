<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微信群</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->assets['app']; ?>/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app']; ?>/css/base.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app']; ?>/css/common.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app']; ?>/css/front.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app']; ?>/css/home.css" />
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/slider.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/jquery-slider.min.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/home.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app']; ?>/css/upload.css" />
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/province.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/citys.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/upload.js"></script>
<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/web.js"></script>
</head>
<body>
<div class="layout header header-search relative clearfix">
	<a href="http://www.weixinqu.cool" title="微信群库网" class="qun-logo"></a>
	<form class="soso-form" action="/web/list?k=" method="get">
		<input type="text" maxlength="50" autocomplete="off" name="k" class="soso-search-input J_searchTxt J_inputTipRelation" id="sosoGuide">
		<input type="submit" value="搜索" class="soso-search-submit J_searchSubmit" />
		<div class="soso-search-tip J_inputTip">请输入<b>标题</b>、<b>关键字</b>、<b>作品编号</b>搜索</div>      
        <div class="clear"></div>
        <div class="header-search-keywords" style="margin-left:16px;">热门搜索：
            <a hidefocus="true" title="微商" href="/web/list?k=微商">微商</a>
            <a hidefocus="true" title="兼职" href="/web/list?k=兼职">兼职</a>
            <a hidefocus="true" title="购物" href="/web/list?k=购物">购物</a>
            <a hidefocus="true" title="美女模特" href="/web/list?k=美女模特">美女模特</a>
            <a hidefocus="true" title="交朋友" href="/web/list?k=交朋友">交朋友</a>
        </div>
	</form>
</div>


<div class="nipic-nav header-bg">
    <div class="layout-width nipic-nav-inner header-bg">
	    <div class="fl nav-item-wrap">
	        <?php foreach ($this->menu as $value) { ?>
                <a href="<?php echo $this->createUrl($value['url']); ?>" title="<?php echo $value['label'] ?>" target="_self" class="fl nipic-nav-item <?php if(Yii::app()->controller->action->id == $value['url']){echo 'nipic-nav-on';} ?>" hidefocus="true"><?php echo $value['label'] ?></a>
            <?php } ?>
		   
	    </div>
    </div>
</div>

<?php echo $content; ?>

<div class="nipic-footer align-center mt40">
    <div class="layout-width">
        <!--
        <a hidefocus="true" title="" href=""></a><span class="sepline">|</span>
        -->

        <p class="gray mt10">
            <span class="font-tahoma">Copyright © 2017 weixinqun.cool All Rights Reserved</span>　版权所有·微信群库网
        </p>
        
    </div>

    <div style="width:300px;margin:0 auto; padding:20px 0;">
        <a target="_blank" href="" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
           <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;"></p>
        </a>
   </div>
</div>
</body>
</html>