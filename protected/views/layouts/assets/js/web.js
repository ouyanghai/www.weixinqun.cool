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
		var page = $("#qun_info").data("page");
		if(parseInt(page) > 1){
			param += "&page="+page;
		}
		window.location.href="/web/list?"+param;
	});
});