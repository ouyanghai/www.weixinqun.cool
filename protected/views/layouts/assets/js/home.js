function showBoxBdSection(){
	var self=$(this),tab=self.attr("tab");self.addClass("box-tab-on").siblings().removeClass("box-tab-on"),$("#"+tab).show().siblings().hide()
}

function setSliderShadow(){
	var ext="",po="555";screen.availWidth<=1250&&(ext="_990",po="493"),$(".notice-bar").length>0&&(po="600",screen.availWidth<=1250&&(po="538"))
}
function setSliderShadowBarClose(){
	var ext="",po="555";screen.availWidth<=1250&&(ext="_990",po="493")
}


$(function(){
$("#indexSlider").NISlider(),$(".show-classify").hover(function(){
$(this).find(".show-box-bd").css("height","auto")
}
,function(){
$(this).find(".show-box-bd").removeAttr("style")
}
),$(".famous-people,.original-recommend").on("mouseover",".box-tab",showBoxBdSection),$(".works-item").hover(function(){
$(this).addClass("works-item-hover")
}
,function(){
$(this).removeClass("works-item-hover")
}
),setSliderShadow();var noticeBar=$(".notice-bar");if(noticeBar.length>0){
noticeBar.show();var noticeBox=$(".notice-list-box");noticeBox.find("li").length>1,$(document).find(".notice-list-close").click(function(){
noticeBar.hide(),setSliderShadowBarClose()
}
)
}

}
);