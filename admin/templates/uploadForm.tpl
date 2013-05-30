{* 图集图片上传表单 *}

<script type="text/javascript">
function choseLocal(id)   //上传本地图片
{
	//alert("start choseLocal");//test
	document.getElementById("upImage").type = "file";
	document.getElementById("which").value = "1";
}

function choseNet()   //变为上传网络图片
{
	//alert("start choseNet");//test
	document.getElementById("upImage").type = "text";
	document.getElementById("which").value = "0";
	
}

function noEmpty(isAllow)   //防止提交空表单。当isAllow为0时，此函数什么也不做，满足更新和新建对图片表单的是否为空的不同要求
{
	if( isAllow == 1 )
	{
		if( document.getElementById("upImage").value == "" )
		{
			alert("图片地址不能为空！");
		}
	}	
}
</script>
<form action="{$action}" method="post" enctype="multipart/form-data">
<span onclick = "choseLocal()" id="local">本地图片</span>  <span onclick = "choseNet()" id="net">网络图片</span>
<br />

<input type="file" name="image" id="upImage"  size="60" />

<input type="hidden" name="which" value="1" id="which"  />
<input type="hidden" name="albumId" value="{$albumId}" />
<br />
<input type="submit" value="上传" onmouseover="noEmpty({$isAllow})"/>
</form>
<hr>
{if $ln == 1 }
<img src="{$host}/{$pictureUrl}" />
{elseif $ln == 0}
	{if $pictureUrl neq null }
<img src="{$pictureUrl}" />
	{/if}
{/if}

