{*图片管理*}
<script type="text/javascript" src="./js/common.js"></script>
<p>图片列表</p>
<p>
	<table border="1">
		<tr>			
			<td><button onclick='deletePic("{$deletePicUrl}")'>删除</button></td>			
		</tr>
	</table>
</p>
<p>
<table border="1" width="80%">
	<tr>
		<th><input type="checkbox" name="box" id="check" onchange="chose(this.id)" value="0" /></th>
		{section name=th loop=$th}
		<th>{$th[th]}</th>
		{/section}
	</tr>
	{section name=td loop=$td}
	<tr>
		<td width="5%"><input type="checkbox" name="boxes[]" value="{$td[td].id}|{$td[td].pictureUrl}" /></td>
		<td width="10%">{$td[td].id}</td>
		<td width="60%" align="center"><img src="{$td[td].pictureUrl}" width="350" height="300" /></td>
		<td width="25%"><a href="{$deletePicUrl}?picIdUrls={$td[td].id}|{$td[td].pictureUrl}">删除</a></td>
	</tr>
	{/section}
</table>
	