
<div class="layout-width mt18 main clearfix" style="position:relative;">

    <div class="main-top mb28 relative clearfix">
        <div class="fl relative slider-box">
            <div class="relative NISlider" id="indexSlider">
                <div class="relative NISlider-imgbox">
                    <ul class="absolute NISlider-imglist">
                        <li class="fl NISlider-imgitem">
                            <a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>22)); ?>" hidefocus="true" title="美女模特" ><img src="<?php echo $this->assets['app'] ?>/images/banner1.jpg" smallSrc="<?php echo $this->assets['app'] ?>/images/banner1.jpg" desc="0" alt="美女模特" />
                            </a>
                        </li>
                        <li class="fl NISlider-imgitem">
                            <a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>11)); ?>" hidefocus="true" title="摄影" ><img src="<?php echo $this->assets['app'] ?>/images/banner2.jpg" smallSrc="<?php echo $this->assets['app'] ?>/images/banner2.jpg" desc="0" alt="摄影" />
                            </a>
                        </li>
                        <li class="fl NISlider-imgitem">
                            <a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>22)); ?>" hidefocus="true" title="运动" ><img src="<?php echo $this->assets['app'] ?>/images/banner3.jpg" smallSrc="<?php echo $this->assets['app'] ?>/images/banner3.jpg" desc="0" alt="运动" />
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="absolute NISlider-trigger-box NISlider-triggerLeft-box">
                    <div class="relative NISlider-trigger-inner">
                        <div class="absolute NISlider-trigger NISlider-triggerLeft"></div>
                        <div class="NISlider-trigger-block"></div>
                    </div>
                </div>
                <div class="absolute NISlider-trigger-box NISlider-triggerRight-box">
                    <div class="relative NISlider-trigger-inner">
                        <div class="absolute NISlider-trigger NISlider-triggerRight"></div>
                        <div class="NISlider-trigger-block"></div>
                    </div>
                </div>
                <div class="absolute NISlider-tab">
                    <div class="relative NISlider-tab-inner">
                        <div class="absolute NISlider-tab-title">
                            <h2></h2>
                            <p></p>
                        </div>
                        <div class="NISlider-tab-block"></div>
                        <div class="absolute NISlider-tab-nav"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fl relative nipic-main-aside">
            <div id="J_homeLoginBox" class="home-login-box">
                <div class="fl avatar-frame">
                    <div class="avatar-frame-block png24"></div>
                        <img src="<?php echo $this->assets['app']; ?>/images/noface.png" class="avatar-img">
                    </div>
                    <div class="home-login-info">
                    <p><span class="font-tahoma">Hi</span>，您好！</p>
                    <a target="_blank" href="<?php echo $this->createUrl("upload"); ?>" hidefocus="true" target="_self" title="上传" class="inline-block simple-btn simple-btn1">上传二维码</a> 
                </div>
            </div>
            
            <div class="hr-line"></div>
            <div class="nipic-huitu-show margin1">
                <div class="huitu-hd">
                    <h2 class="fl font14">最新群二维码</h2>
                    <a target="_blank" href="<?php echo $this->createUrl("list"); ?>" hidefocus="true" title="更多" class="fr more-huitu-task">更多&gt;&gt;</a>
                </div>
                <div class="relative huitu-task-box-wrap">
                    <div class="huitu-task-box">
                        <ul class="fl huitu-task-list">
                                <li class="fl huitu-task-item">
                                    <div class="fl list-ico-1 ico"></div>
                                    <div class="huitu-task-name ellipsis fl"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>41)); ?>" title="富婆群" hidefocus="true">富婆群</a></div>
                                </li>
                                <li class="fl huitu-task-item">
                                    <div class="fl list-ico-1 ico"></div>
                                    <div class="huitu-task-name ellipsis fl"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>42)); ?>" title="土豪群" hidefocus="true">土豪群</a></div>
                                </li>
                                <li class="fl huitu-task-item">
                                    <div class="fl list-ico-1 ico"></div>
                                    <div class="huitu-task-name ellipsis fl"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>45)); ?>" title="美女直播" hidefocus="true">美女直播</a></div>
                                </li>
                                <li class="fl huitu-task-item">
                                    <div class="fl list-ico-1 ico"></div>
                                    <div class="huitu-task-name ellipsis fl"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>50)); ?>" title="网络红人" hidefocus="true">网络红人</a></div>
                                </li>
                                <li class="fl huitu-task-item">
                                    <div class="fl list-ico-1 ico"></div>
                                    <div class="huitu-task-name ellipsis fl"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>22)); ?>" title="美女模特" hidefocus="true">美女模特</a></div>
                                </li>
                        </ul>
                    </div>
                    <div class="absolute huitu-task-shadow bg-png8"></div>
                </div>
                <dl class="to-find-commerical">
                    <dt class="fl huitu-pic-show">
                        <a target="_blank" title="" hidefocus="true" class="block" href="<?php echo $this->createUrl("list",array('cate'=>1)); ?>"><img src="<?php echo $this->assets['app'] ?>/images/find-wei.jpeg" alt="" /></a>
                    </dt>
                    <dd class="fl huitu-link">
                        <a target="_blank" title="去找微商群聊" class="block huitu-logo-box relative" hidefocus="true" href="<?php echo $this->createUrl("list",array('cate'=>1)); ?>"><span class="huitu-logo"></span><span class="font-yahei font14">去找微商群聊</span><span class="absolute arrow find-commerical-arrow"></span></a>
                    </dd>
                </dl>
            </div>
        </div>
    </div>

    <!-- 活动相关 -->
    <div class="fl main-content">
        
        <div class="show-box design-show-box clearfix">
            <div class="fl relative show-classify design-classify mb10 mr12">
                <div class="relative show-box-hd design-classify-hd">
                    <div class="fl ico mr5 design-ico"></div>
                    <h2 class="fl font-yahei font16">微信商家</h2>
                </div>
                <div class="absolute show-box-bd design-classify-bd">
                    <div class="classify-list design-classify-list clearfix">
                    <?php for($i=1;$i<=10;$i++){ ?>
                        <a target="_blank" title="<?php echo $this->cate[$i]; ?>" class="fl tag-item margin_3_5" hidefocus="true" href="<?php echo $this->createUrl("list",array('cate'=>$i)); ?>"><span class="fl"><em class="fl"><?php echo $this->cate[$i]; ?></em></span></a>
                    <?php } ?>
                    </div>
                </div>
            </div>
            <?php foreach ($data1 as $key => $value){ ?>
            <div class="fl works-item align-center mr12 mb10">
                <a target="_blank" class="relative" href="<?php echo $this->createUrl("detail",array('id'=>$value['id'])); ?>" hidefocus="true" title="<?php echo $value['qun_name']; ?>">
                    <span class="for-vertical"></span><span><img style='width:118px;height:118px;' src="<?php echo Yii::app()->request->hostInfo.'/images/upload/'.substr($value['created'], 0,10).'/'.$value['qun_logo']; ?>" alt="<?php echo $value['qun_name']; ?>" class="imgmax118"></span><span class="block absolute works-name-filter"></span><span class="block absolute works-name ellipsis"><?php echo $value['qun_name']; ?></span>
                </a>
            </div>
            <?php } ?>
        </div>
    
        <div class="line margin_14_12_19_0"></div>

        <div class="show-box photo-show-box clearfix">
            <div class="fl relative show-classify photo-classify mr12">
                <div class="show-box-hd relative photo-classify-hd">
                    <div class="fl ico margin_1_7_0_0 photo-ico"></div>
                    <h2 class="fl font-yahei font16">生活购物</h2>
                </div>
                <div class="absolute show-box-bd photo-classify-bd">
                    <div class="classify-list photo-classify-list clearfix">
                    <?php for($i=10;$i<=18;$i++){ ?>
                        <a target="_blank" title="<?php echo $this->cate[$i]; ?>" class="fl tag-item margin_3_5" hidefocus="true" href="<?php echo $this->createUrl("list",array('cate'=>$i)); ?>"><span class="fl"><em class="fl"><?php echo $this->cate[$i]; ?></em></span></a>
                    <?php } ?>        

                    </div>
                </div>
            </div>
            <?php foreach ($data2 as $key => $value){ ?>
            <div class="fl works-item align-center mr12 mb10">
                <a target="_blank" class="relative" href="<?php echo $this->createUrl("detail",array('id'=>$value['id'])); ?>" hidefocus="true" title="<?php echo $value['qun_name']; ?>">
                    <span class="for-vertical"></span><span><img style='width:118px;height:118px;' src="<?php echo Yii::app()->request->hostInfo.'/images/upload/'.substr($value['created'], 0,10).'/'.$value['qun_logo']; ?>" alt="<?php echo $value['qun_name']; ?>" class="imgmax118"></span><span class="block absolute works-name-filter"></span><span class="block absolute works-name ellipsis"><?php echo $value['qun_name']; ?></span>
                </a>
            </div>
            <?php } ?> 
        </div>

        <div class="line margin_14_12_19_0"></div>
        
        <div class="show-box media-show-box clearfix">
            <div class="fl relative show-classify media-classify mr12">
                <div class="show-box-hd relative media-classify-hd">
                    <div class="fl ico margin_1_7_0_0 media-ico"></div>
                    <h2 class="fl font-yahei font16">互粉交友</h2>
                </div>
                <div class="absolute show-box-bd media-classify-bd">
                    <div class="classify-list media-classify-list clearfix">
                    <?php for($i=19;$i<=27;$i++){ ?>
                        <a target="_blank" title="<?php echo $this->cate[$i]; ?>" class="fl tag-item margin_3_5" hidefocus="true" href="<?php echo $this->createUrl("list",array('cate'=>$i)); ?>"><span class="fl"><em class="fl"><?php echo $this->cate[$i]; ?></em></span></a>
                    <?php } ?>    

                    </div>
                </div>
            </div>
            <?php foreach ($data3 as $key => $value){ ?>
            <div class="fl works-item align-center mr12 mb10">
                <a target="_blank" class="relative" href="<?php echo $this->createUrl("detail",array('id'=>$value['id'])); ?>" hidefocus="true" title="<?php echo $value['qun_name']; ?>">
                    <span class="for-vertical"></span><span><img style='width:118px;height:118px;' src="<?php echo Yii::app()->request->hostInfo.'/images/upload/'.substr($value['created'], 0,10).'/'.$value['qun_logo']; ?>" alt="<?php echo $value['qun_name']; ?>" class="imgmax118"></span><span class="block absolute works-name-filter"></span><span class="block absolute works-name ellipsis"><?php echo $value['qun_name']; ?></span>
                </a>
            </div>
            <?php } ?>  
        </div>
    </div>

    <div class="fr main-aside">
        <!--交易动态-->
        <!--一周原创热门-->
        <div class="box download-rank mb15">
            <div class="boxHd">
                <div class="fl ico margin_3_4_0_13 down-rank-ico"></div>
                <h2 class="fl font-normal font16 font-yahei">一周搜索热门</h2>
            </div>
            <div class="first-second-third clearfix">
                    <div class="fl relative download-first download-special">
                        <div class="absolute ico download-special-ico"></div>
                        <div class="download-num absolute">1</div>
                        <div class="download-rank-img">
                            <a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>1)); ?>" title="微商" hidefocus="true"><img src="<?php echo $this->assets['app'] ?>/images/weishang.jpeg" alt="微商"></a>
                        </div>
                        <div class="download-img-name ellipsis"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>1)); ?>" title="微商" hidefocus="true">微商</a></div>
                        <div class="absolute bg-png8 download-shadow"></div>
                    </div>
                    <div class="fl relative download-first download-special">
                        <div class="absolute ico download-special-ico"></div>
                        <div class="download-num absolute">2</div>
                        <div class="download-rank-img">
                            <a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>22)); ?>" title="美女模特" hidefocus="true"><img src="<?php echo $this->assets['app'] ?>/images/mote.png" alt="美女模特"></a>
                        </div>
                        <div class="download-img-name ellipsis"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>22)); ?>" title="美女模特" hidefocus="true">美女模特</a></div>
                        <div class="absolute bg-png8 download-shadow"></div>
                    </div>
                    <div class="fl relative download-first download-special">
                        <div class="absolute ico download-special-ico"></div>
                        <div class="download-num absolute">3</div>
                        <div class="download-rank-img">
                            <a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>11)); ?>" title="摄影群" hidefocus="true"><img src="<?php echo $this->assets['app'] ?>/images/she.jpeg" alt="摄影群"></a>
                        </div>
                        <div class="download-img-name ellipsis"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>11)); ?>" title="摄影群" hidefocus="true">摄影群</a></div>
                        <div class="absolute bg-png8 download-shadow"></div>
                    </div>

            </div>
            <ul class="download-rank-list">
                    <li class="download-rank-item">
                        <div class="fl download-num">4</div>
                        <div class="fl ellipsis download-works-box"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>3)); ?>" title="招代理商" hidefocus="true" class="download-works-link">招代理商</a></div>
                    </li>
                    <li class="download-rank-item">
                        <div class="fl download-num">5</div>
                        <div class="fl ellipsis download-works-box"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>19)); ?>" title="宝妈群" hidefocus="true" class="download-works-link">宝妈群</a></div>
                    
                    </li>
                    <li class="download-rank-item">
                        <div class="fl download-num">6</div>
                        <div class="fl ellipsis download-works-box"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>25)); ?>" title="车友群" hidefocus="true" class="download-works-link">车友群</a></div>
                    
                    </li>
                    <li class="download-rank-item">
                        <div class="fl download-num">7</div>
                        <div class="fl ellipsis download-works-box"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>17)); ?>" title="美食" hidefocus="true" class="download-works-link">美食</a></div>
                   
                    </li>
                    <li class="download-rank-item">
                        <div class="fl download-num">8</div>
                        <div class="fl ellipsis download-works-box"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>7)); ?>" title="兼职群" hidefocus="true" class="download-works-link">兼职群</a></div>
                    
                    </li>
                    <li class="download-rank-item">
                        <div class="fl download-num">9</div>
                        <div class="fl ellipsis download-works-box"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>3)); ?>" title="招代理商" hidefocus="true" class="download-works-link">招代理商</a></div>
                    
                    </li>
                    <li class="download-rank-item">
                        <div class="fl download-num">10</div>
                        <div class="fl ellipsis download-works-box"><a target="_blank" href="<?php echo $this->createUrl("list",array('cate'=>12)); ?>" title="旅游" hidefocus="true" class="download-works-link">旅游</a></div>
                    </li>

            </ul>
        </div>

        <!--一周热搜开始-->
        <div class="box hot-keywords mb15">
            <div class="boxHd">
                <div class="fl keywords-ico mr5 ml13 ico"></div>
                <h2 class="fl font-normal font16 font-yahei">城市热搜榜</h2>
            </div>
            <div class="hot-keywords-list clearfix">
                <a target="_blank" hidefocus="true" title="深圳" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>2)); ?>"><span class="fl"><em class="fl">深圳</em></span></a>

                <a target="_blank" hidefocus="true" title="上海" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>439)); ?>"><span class="fl"><em class="fl">上海</em></span></a>

                <a target="_blank" hidefocus="true" title="北京" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>438)); ?>"><span class="fl"><em class="fl">北京</em></span></a>

                <a target="_blank" hidefocus="true" title="武汉" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>194)); ?>"><span class="fl"><em class="fl">武汉</em></span></a>

                <a target="_blank" hidefocus="true" title="杭州" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>108)); ?>"><span class="fl"><em class="fl">杭州</em></span></a>

                <a target="_blank" hidefocus="true" title="成都" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>283)); ?>"><span class="fl"><em class="fl">成都</em></span></a>

                <a target="_blank" hidefocus="true" title="长沙" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>211)); ?>"><span class="fl"><em class="fl">长沙</em></span></a>

                <a target="_blank" hidefocus="true" title="苏州" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>75)); ?>"><span class="fl"><em class="fl">苏州</em></span></a>

                <a target="_blank" hidefocus="true" title="南京" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>77)); ?>"><span class="fl"><em class="fl">南京</em></span></a>

                <a target="_blank" hidefocus="true" title="哈尔滨" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>256)); ?>"><span class="fl"><em class="fl">哈尔滨</em></span></a>

                <a target="_blank" hidefocus="true" title="重庆" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>440)); ?>"><span class="fl"><em class="fl">重庆</em></span></a>

                <a target="_blank" hidefocus="true" title="东莞" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>4)); ?>"><span class="fl"><em class="fl">东莞</em></span></a>

                <a target="_blank" hidefocus="true" title="广州" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>3)); ?>"><span class="fl"><em class="fl">广州</em></span></a>

                <a target="_blank" hidefocus="true" title="天津" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>441)); ?>"><span class="fl"><em class="fl">天津</em></span></a>

                <a target="_blank" hidefocus="true" title="珠海" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>7)); ?>"><span class="fl"><em class="fl">珠海</em></span></a>

                <a target="_blank" hidefocus="true" title="大连" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>241)); ?>"><span class="fl"><em class="fl">大连</em></span></a>

                <a target="_blank" hidefocus="true" title="福州" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>156)); ?>"><span class="fl"><em class="fl">福州</em></span></a>

                <a target="_blank" hidefocus="true" title="昆明" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>308)); ?>"><span class="fl"><em class="fl">昆明</em></span></a>

                <a target="_blank" hidefocus="true" title="南昌" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>228)); ?>"><span class="fl"><em class="fl">南昌</em></span></a>

                <a target="_blank" hidefocus="true" title="郑州" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>29)); ?>"><span class="fl"><em class="fl">郑州</em></span></a>

                <a target="_blank" hidefocus="true" title="石家庄" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>343)); ?>"><span class="fl"><em class="fl">石家庄</em></span></a>

                <a target="_blank" hidefocus="true" title="南宁" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>169)); ?>"><span class="fl"><em class="fl">南宁</em></span></a>

                <a target="_blank" hidefocus="true" title="温州" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>110)); ?>"><span class="fl"><em class="fl">温州</em></span></a>

                <a target="_blank" hidefocus="true" title="宁波" class="fl tag-item margin_6_5" href="<?php echo $this->createUrl("list",array('city'=>109)); ?>"><span class="fl"><em class="fl">宁波</em></span></a>

            </div>
        </div>
         
        <!--
        <div class="box original-recommend">
            <div class="boxHd">
                <div style="margin: 1px 5px 0px 17px;" class="fl original-ico1 ico"></div>
                <h2 class="fl font-normal font16 font-yahei">商业正版</h2>
                <img class="fr mr15" src="http://static.nipic.com/images/huitu_logo_small.jpg" alt="汇图网" />
                
            </div>
            <div class="boxBd">
                <div class="original-list clearfix">
                    <a target="_blank" title="蝴蝶" class="fl original-item" hidefocus="true" href="/huitu/switch?hturl=http://www.huitu.com/design/show/20170818/125126680020.html"><img src="http://show.huitu.com/pic/20170829/r33355.jpg" alt="蝴蝶"></a>
                    <a target="_blank" title="秀美蜀山" class="fl original-item" hidefocus="true" href="/detail/huitu/20170726/101603297010.html"><img src="http://show.huitu.com/pic/20170829/r33329.jpg" alt="秀美蜀山"></a>
                    <a target="_blank" title="2018狗年春节设计" class="fl original-item" hidefocus="true" href="/huitu/switch?hturl=http://www.huitu.com/design/show/20170819/203750549060.html"><img src="http://show.huitu.com/pic/20170829/r33352.jpg" alt="2018狗年春节设计"></a>
                    <a target="_blank" title="日出" class="fl original-item" hidefocus="true" href="/detail/huitu/20170819/065203872116.html"><img src="http://show.huitu.com/pic/20170829/r33326.jpg" alt="日出"></a>

                </div>
            </div>
        </div>
        -->
    </div>
</div>

