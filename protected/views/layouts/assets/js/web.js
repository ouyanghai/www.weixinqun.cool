$(function(){
	$("#go-login").click(function(){
		window.location.href="/admin/loginpage";
	});
	$("#go-register").click(function(){
		window.location.href="/admin/regpage";
	});
	$("#search_city").click(function(){
		var cate = $("#qun_info").data("cate");
		var city = $("#citys").val();
		var param = "cate="+cate+"&city="+city;
		/*
		var page = $("#qun_info").data("page");
		if(parseInt(page) > 1){
			param += "&page="+page;
		}
		*/
		window.location.href="/web/list?"+param;
	});
	$("#detail_user_img_a").mouseover(function(){
		$(this).css("background-color","#ff3265").css("color","white");
		$("#detail_qun_img_a").css("background-color","white").css("color","black");
		$("#detail_qun_img").hide();
		$("#detail_user_img").show();
	});
	$("#detail_qun_img_a").mouseover(function(){
		$(this).css("background-color","#ff3265").css("color","white");
		$("#detail_user_img_a").css("background-color","white").css("color","black");
		$("#detail_user_img").hide();
		$("#detail_qun_img").show();
	});
});