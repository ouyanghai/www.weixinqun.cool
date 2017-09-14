$(function(){
	var sub = false;
	initArea();

	//省市二级联动
	$("#province").bind("change",function(){
		var id = $(this).val();
		var chtml = '';
		var city = citys[id]['children'];
		for(var i in city){
			chtml += "<option value='"+i+"'>"+city[i]+"</option>"
		}
		$("#citys").html(chtml);
	});

	$(".upload-span").click(function(){
		$(this).parent().find(".upload_file").click();
	});

	$(".upload_file").change(function(){
		var file = this.files[0];
		var ext = file.name.split(".").pop();
		var size = file.size;

		if(ext!='jpg' && ext!='png' && ext!='jpeg'){
			$(this).parent().find(".upload_msg").html("<font style='color:red'>文件格式必须是(JPG,JPEG,PNG)</font>");
			return false;
		}
		if(size > 1024*1024*2){
			$(this).parent().find(".upload_msg").html("<font style='color:red'>文件必须小于2M</font>");
			return false;
		}
		$(this).parent().find(".upload_msg").html("文件选择成功");
		sub = true;
	});

	//提交表单
	$("#submit").click(function(){
		
		var cate = $("#cate").val();
		var city = $("#citys").val();
		var qun_name = $("#qun_name").val();
		var qun_info = $("#qun_info").val();
		$("#city_name").val($("#citys option:selected").text());
		
		if(cate==''||city==''||qun_name==''||qun_info==''){
			return alert("请将信息填写完整");
		}
		
		var option = {
			clearForm:true,
			success:function(data){
				if(data=='ok'){
					alert("上传成功");	
				}else{
					alert(data);
				}
			},
			error:function(data){
				alert("网络错误");
			},
			url:'/web/getupload',
			type:'POST',
			dataType:'json'
		};
		
		if(sub){

			$("#uploadForm").ajaxSubmit(option);		
		}
		
	});
});
function initArea(){

	var phtml = '';
	for(var i in citys){
		phtml += "<option value='"+i+"'>"+citys[i]['text']+"</option>"
	}

	var chtml = '';
	var city = citys[1]['children'];
	for(var i in city){
		chtml += "<option value='"+i+"'>"+city[i]+"</option>"
	}
	$("#province").html(phtml);
	$("#citys").html(chtml);
}