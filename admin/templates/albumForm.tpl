{* 图集管理FORM 新建图集、编辑图集*}

<script type="text/javascript">
function choseLocal(id)   //上传本地图片
{	
	document.getElementById("upImage").type = "file";	
}

function choseNet()   //变为上传网络图片
{	
	document.getElementById("upImage").type = "text";	
}

function noEmpty(isAllow)   //防止提交空表单
{	
	if( isAllow == 0 )
	{
		return;
	}
	if( document.getElementById("upImage").value == "" )
	{
		alert("图片地址不能为空！");
	}
}
</script>
<form action="{$action}" method="post" enctype="multipart/form-data">

选择：
<select name="topic">
	{html_options options=$topicName selected=$topicId}
</select>

<p>
标题：
<input type="text" name="albumName"  value="{$albumName}" />
</p>
<p>
	<ul>
		<li>操作：</li>
<!--<input type="checkbox" name="recommend[]" value="0" />推荐到首页大图-->
        <li><input type="checkbox" name="recommend[]" value="1" />推荐到首页中图</li>
        <li><input type="checkbox" name="recommend[]" value="2" />推荐到首页文字</li>
		<li><input type="checkbox" name="recommend[]" value="3" />推荐到首页小图</li>
		<li><input type="checkbox" name="recommend[]" value="4" />推荐到图片展示页的精选</li>
	</ul>
</p>
<p>图集封面：</p>
<p>
	<span onclick = "choseLocal()" id="local">本地图片</span>  <span onclick = "choseNet()" id="net">网络图片</span>
</p>
<p>
	<input type="file" name="image" id="upImage"  size="60" />
</p>

<input type="hidden" name="which" value="{$which}" id="which"  />
<input type="hidden" name="albumId" value="{$albumId}"  />
<input type="hidden" name="isEmpty" value="1" id="isEmpty" />
<p>
	<input type="submit" value="上传" onmouseover="noEmpty({$isAllow})"/>
</p>
</form>