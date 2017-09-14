
<div id="upload-content">
	<div id="upload-title">发布微信群</div>
	<form id="uploadForm">
		<div class='row-input'>
			所属行业&nbsp;&nbsp;:
			<select name="qun_cate" id="cate">
			<?php foreach ($this->cate as $key => $value) { ?>
				<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
			<?php } ?>
			</select>
		</div>

		<div class='row-input'>
			所在地区&nbsp;&nbsp;:
			<select id="province"></select>
			<select name="qun_city" id="citys"></select><br/>	
			<input type="hidden" name="city_name" id="city_name"/>
		</div>
		
		<div class='row-input'>
			微信群名称:
			<input type='text' style="width:307px;" name='qun_name' id="qun_name" placeholder=""/>
		</div>
		<div class='row-input'>
			微信群标签:
			<input type='text' style="width:307px;" name='qun_keyword' id="qun_keyword" placeholder="多个标签以空格隔开"/>
		</div>
		<div class='row-input'>
			<span style="float:left;">微信群介绍&nbsp;:</span>
			<textarea name="qun_info" id="qun_info" style="width:307px;height:100px;"></textarea>
		</div>
		
		<div class='row-input'>
			微信群图像:
			<span class="upload-span">上传群图像</span>
			<input type="file" class='upload_file' id="qun_logo" name="qun_logo" style="display:none;"/>
			<span class="upload_msg"></span>
		</div>
		<div class='row-input'>
			群二维码&nbsp;&nbsp;:
			<span class="upload-span">上传群二维码</span>
			<input type="file" id="qun_img" class='upload_file' name="qun_img" style="display:none;"/>
			<span class="upload_msg"></span>
		</div>
		
		<div class='row-input'>
			群主二维码:
			<span class="upload-span">上传群主二维码</span>
			<input type="file" id="qun_user_img" class='upload_file' name="qun_user_img" style="display:none;"/>
			<span class="upload_msg"></span>
		</div>
		<!--
		<div class='row-input'>
			群主微信号:
			<input type='text' name='telNum' id="telNum" placeholder=""/>
		</div>
		<div class='row-input'>
			联系人:
			<input type='text' name='telNum' id="telNum" placeholder=""/>
		</div>
		<div class='row-input'>
			联系电话:
			<input type='text' name='telNum' id="telNum" placeholder=""/>
		</div>
		-->
	
		<div class='row-input'>
			<input type='button' id='submit' value='提交' />
		</div>
	</form>
</div>

