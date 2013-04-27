{* 图集管理FORM *}

<script type="text/javascript">
function choseLocal(id)   //上传本地图片
{
	//alert("start choseLocal");//test
	document.getElementById("upImage").type = "file";
	//document.getElementById("which").value = "1";
}

function choseNet()   //变为上传网络图片
{
	//alert("start choseNet");//test
	document.getElementById("upImage").type = "text";
	//document.getElementById("which").value = "0";
	
}

function noEmpty()   //防止提交空表单
{
	if( document.getElementById("upImage").value == "" )
	{
		alert("图片地址不能为空！");
	}
}
</script>
<form action="{$action}" method="post" enctype="multipart/form-data">
选择栏目：
<select name="topic">
	{html_options options=$topicName selected=$topicId}
</select>
<br />
标题：
<input type="text" name="albumName"  value="{$albumName}" />
<br />

图集封面：<br />
<span onclick = "choseLocal()" id="local">本地图片</span>  <span onclick = "choseNet()" id="net">网络图片</span>
<br />

<input type="file" name="image" id="upImage"  size="60" />

<input type="hidden" name="which" value="{$which}" id="which"  />
<input type="hidden" name="albumId" value="{$albumId}"  />
<br />
<input type="submit" value="上传" onmouseover="noEmpty()"/>
</form>
<hr>

{if $which == "edit" }
<img src="{$thumbUrl}" />
{/if}
