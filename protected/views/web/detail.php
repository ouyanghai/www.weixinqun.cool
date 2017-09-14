<div class="layout-width mt13 clearfix relative" style="width:1000px;">
    <div class="fl detail-main" id="J_detailMain">
        <div class="works-show-box">
            <h1 itemprop="name" class="works-show-title"><?php echo $data['qun_name']; ?></h1>
            <div class="works-show relative">
                <!-- 多媒体静态或者其他作品的放这里 -->
                <div id="static" class="show-img-section overflow-hidden align-center">
                    <img style="height:350px;" src="<?php echo Yii::app()->request->hostInfo.'/images/upload/'.substr($data['created'], 0,10).'/'.$data['qun_img']; ?>"/>
                </div>
                <!-- 动态的放这里 -->
            </div>
            <div class="works-show-box-ft gray2">
                <div id="baiduShare" class="fr mt5 clearfix"></div>
            </div>
        </div>
       
        <div class="works-intro gray2 clearfix" style="padding-left:25px;padding-right:25px;line-height: 22px;">
            <span class="ico notice-ico"></span>
            <?php echo $data['qun_info']; ?>
        </div>
    </div>
    <!--
    <div class="fr detail-aside rightct">
        <div class="author-works-box box">
            <div class="author-works-title"><h2 class="fl">其他群图片</h2></div>
            <div class="author-works-list clearfix">
                <a href="/show/17856857.html" title="地毯上的妇女" target="_self" hidefocus="true" class="fl author-works-item"><span class="for-vertical"></span><img src="http://img85.nipic.com/file/20170809/8016870_164502153000_1.jpg" alt="地毯上的妇女"></a>

                <a href="/show/17856856.html" title="笔记本电脑" target="_self" hidefocus="true" class="fl author-works-item"><span class="for-vertical"></span><img src="http://img85.nipic.com/file/20170809/8016870_164512205000_1.jpg" alt="笔记本电脑"></a>
                <a href="/show/17856855.html" title="桌子上面的笔记本" target="_self" hidefocus="true" class="fl author-works-item"><span class="for-vertical"></span><img src="http://img85.nipic.com/file/20170809/8016870_164414762000_1.jpg" alt="桌子上面的笔记本"></a>
                <a href="/show/17856854.html" title="不锈钢厨具" target="_self" hidefocus="true" class="fl author-works-item"><span class="for-vertical"></span><img src="http://img85.nipic.com/file/20170809/8016870_170941016000_1.jpg" alt="不锈钢厨具"></a>
                <a href="/show/17856852.html" title="房间里的空桌子" target="_self" hidefocus="true" class="fl author-works-item"><span class="for-vertical"></span><img src="http://img85.nipic.com/file/20170809/8016870_170940842000_1.jpg" alt="房间里的空桌子"></a>
                <a href="/show/17856851.html" title="干活的家庭妇女" target="_self" hidefocus="true" class="fl author-works-item"><span class="for-vertical"></span><img src="http://img85.nipic.com/file/20170809/8016870_170958822000_1.jpg" alt="干活的家庭妇女"></a>

            </div>
        </div>
    </div>
    -->
</div>

