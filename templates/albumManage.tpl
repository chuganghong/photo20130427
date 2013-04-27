{*图集管理*}
<script type="text/javascript" src="./js/common.js"></script>
<p>图集列表</p>
<p>
	<table border="1">
		<tr>
			<td><a href="{$addUrl}?which=add">新增</a></td>
			<td><a href="#" onclick="edit('{$editUrl}')">编辑</a></td>
			<td onclick='deleteAlbum("{$deleteUrl}")'>删除</td>			
		</tr>
	</table>
</p>
<p>
<table border="1" width="80%">	
	<tr>
		<th><input type="checkbox" name="box" id="check" onchange="chose(this.id)" /></th>
		{section name=th loop=$th}
		<th>{$th[th]}</th>
		{/section}
	</tr>
	{if $td|@count neq 0}
		{section name=td loop=$td }
		<tr>
			<td><input type="checkbox" name="boxes[]" value="{$td[td].topicId}=>{$td[td].albumName}=>{$td[td].thumbUrl}=>{$td[td].id}" /></td>
			<td>{$smarty.section.td.index+1}</td>
			<td>{$td[td].albumName}</td>
			<td><a href="{$uploadUrl}?id={$td[td].id}">上传图片</a></td>
		</tr>
		{/section}
	{/if}
</table>
</p>