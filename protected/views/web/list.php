
<div class="layout-width mt13 clearfix">
    <div class="fl main-column">
        <div class="menu-box photo-box">
            <div class="menu-box-hd">
                <div class="fl ico mr6 mt13 photo-ico"></div>
                <h2 class="fl font16 font-yahei font-normal blue1">行业类别</h2>
            </div>
            <div class="menu-box-bd">
                <?php foreach ($this->c_cate as $key => $value) { ?>
                    
                <dl class="relative menu-list">
                    <dt class="menu-title menu-title-first">
                        <div class="menu-title-inner">
                            <a href="javascript:;" hidefocus="true" class="fl mr10 relative menu-reclassify" title="<?php echo $key; ?>"><strong><?php echo $key; ?></strong></a>
                        </div>
                    </dt>
                    <dd class="menu-item-list clearfix">
                        <?php foreach ($value as $k => $v) { ?>
                            <a <?php if($k==$cate){echo "style='background-color:#FF5050'";} ?> class="fl menu-three-classify" title="<?php echo $v; ?>" href="<?php echo $this->createUrl("list",array('cate'=>$k,'city'=>$city)); ?>"><?php echo $v; ?></a>    
                        <?php } ?>
                    </dd>
                </dl>
                <?php } ?>                    
            </div>
        </div>
    </div>

    <div class="fr main-rightside" style="min-height:600px;position:relative;">
        <div class="fl relative slider-box">
            <div class="relative NISlider" id="photoSlider" style="height:40px;padding-left:5px;background-color: #dedede;">

                <input type="hidden" id="qun_info" data-city="<?php echo $city; ?>" data-cate="<?php echo $cate; ?>" data-page="<?php echo $page; ?>"/>
                <span style="font-size:15px;display:inline-block;height:40px;line-height:40px;">当前地区:<?php echo $city_name; ?>
                <select style="vertical-align:baseline;margin-left:100px;" id="province"></select>
                <select style="vertical-align:baseline;" name="qun_city" id="citys"></select>
                <span style="display:inline-block;height:30px;line-height:30px;width:60px;background-color:#eaeaea;text-align:center;border-radius:4px;cursor:pointer;" type="button" id="search_city">搜索</span>
                </span>
                <!--
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate)); ?>">全部</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>3)); ?>">广州</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>438)); ?>">北京</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>439)); ?>">上海</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>108)); ?>">杭州</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>283)); ?>">成都</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>156)); ?>">福州</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>77)); ?>">南京</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>55)); ?>">济南</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>29)); ?>">郑州</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>2)); ?>">深圳</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>441)); ?>">天津</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>343)); ?>">石家庄</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>211)); ?>">长沙</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>194)); ?>">武汉</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>247)); ?>">沈阳</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>256)); ?>">哈尔滨</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>433)); ?>">西安</a>
                <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>169)); ?>">南宁</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="">更多...</a>
                -->
            </div>
        </div>

        <div class="clear"></div>

        <div class="pic-bone mt10" style="margin-bottom:25px;">
            <div class="pic-bone-bd overflow-hidden clearfix">
                <div class="pic-bone-box-list clearfix">
                    <?php 
                    if(!empty($data)){
                    foreach ($data as $key => $value) { ?>
                        
                    <div class="fl pic-bone-box">
                        <a href="<?php echo $this->createUrl("detail",array('id'=>$value['id'])); ?>"  target="_blank" hidefocus="true" title="<?php echo $value['qun_name']; ?>" class="block hover-none relative align-center pic-bone-imgbox">
                            <img style="width:145px; height:145px;" src="<?php echo Yii::app()->request->hostInfo.'/images/upload/'.substr($value['created'], 0,10).'/'.$value['qun_logo']; ?>"/>
                            <span class="absolute block pic-bone-shadow"></span><span class="absolute block align-center ellipsis pic-bone-imgname"><?php echo $value['qun_name']; ?></span>
                        </a>
                    </div>

                    <?php }}else{ ?> 
                        <span style="color:red;width:100%;text-align:center;display:inline-block;">无此城市或行业微信群</span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div style="width:100%;text-align:center;position:absolute;bottom:0px;font-size:14px;">
            <?php 
                $prev_page = ($page-1)>0?$page-1:1;
                $next_page = $page+1<=$pages?$page+1:$pages;
             ?>
            <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>$city,'page'=>1)); ?>"/>首页</a> 
            <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>$city,'page'=>$prev_page)); ?>">上一页</a>
            <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>$city,'page'=>$next_page)); ?>">下一页</a>
            <a href="<?php echo $this->createUrl("list",array('cate'=>$cate,'city'=>$city,'page'=>$pages)); ?>">尾页</a>
            &nbsp;&nbsp;&nbsp;<span><?php echo '第'.$page.'/'.$pages.'页' ?></span>
        </div>
    </div>

</div>



