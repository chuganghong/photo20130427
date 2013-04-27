{*栏目管理*}
<script type="text/javascript" src="./js/common.js"></script>
<script type="text/javascript" src="./js/common.js"></script>
<p>栏目列表</p>
<p>
	<table border="1">
		<tr>
			<td><a href="{$addUrl}?which=add" class="ade" >新增</a></td>
			<td><a href="#" class="ade" onclick="edit('{$editUrl}')">编辑</a></td>
			<td><a href="#" class="ade" onclick="_delete('{$deleteUrl}')">删除</a></td>			
		</tr>
	</table>
</p>
<p>
<table border="1" width="80%">
	<tr>
		<th><input type="checkbox" id="check" onchange="chose(this.id)" /></th>
	{section name=th loop=$th}		
		<th>{$th[th]}</th>
	{/section}
	</tr>
	
	{if $trTd|@count neq 0}
	{section name=trTd loop=$trTd}
	<tr>
		
			<td><input type="checkbox" name="boxes[]" value="{$trTd[trTd].id}=>{$trTd[trTd].topicName}"  /></td>
			<td>{$smarty.section.trTd.index + 1}</td>
			<td>{$trTd[trTd].topicName}</td>
			<td>删除</td>
		
	</tr>
	{/section}
	{/if}
	
</table>