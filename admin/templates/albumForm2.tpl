{* 图集管理FORM 编辑图集*}

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

function isChange()   //识别是否更新了图集的缩略图，1为更新了，0为未更新
{
	//alert('start');//test
	value1 = document.getElementById("upImage").value;
	//alert(value1);  //test
	value2 = document.getElementById("changeId").value;
	if( !value1 )
	{
		value2 = 0;
		document.getElementById("changeId").value = value2;
	}
	else
	{
		value2 = 1;
		document.getElementById("changeId").value = value2;
	}
	//alert(value2);   //test
	document.getElementById("tip").innerHTML = value2;//test
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
<input type="hidden" name="change" id="changeId" />{* 当此处的id和onmouseover的函数同名时，不知为何，JS不能正确运行。*}
<br />
<input type="submit" value="更新" onmouseover="isChange()"/>
</form>
<hr>
<p id="tip"></p>

<img src="{$thumbUrl}" />

{*
{if $ln equ 1}
	<img src="{$host}/{$thumbUrl}" />
{else if $ln equ 0}
		<img src="{$thumbUrl}" />
{/if}
*}