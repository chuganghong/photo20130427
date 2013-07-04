{*栏目管理*}
<script type="text/javascript" src="{$js}"></script>
<style type="text/css">
table
{
	border-collapse:collapse;
	width:80%;
	margin:0 auto;
}
td,th
{
	border:1px solid gray;
	text-align:center;
	padding-top:10px;
	padding-bottom:10px;
	
}
</style>

<p>
	<table >
		<tr>
			<td><a href="{$addUrl}?which=add" class="ade" >新增</a></td>
			<td><a href="#" class="ade" onclick="edit('{$editUrl}')">编辑</a></td>
			<td><a href="#" class="ade" onclick="_delete('{$deleteUrl}')">删除</a></td>			
		</tr>
	</table>
</p>
<p>
<table>
	<tr>
		<th><input type="checkbox" id="check" onchange="chose(this.id)" value="0" /></th>
	{section name=th loop=$th}		
		<th>{$th[th]}</th>
	{/section}
	</tr>
	
	{if $trTd|@count neq 0}
	{section name=trTd loop=$trTd}
	<tr>
		
			<td><input type="checkbox" name="boxes[]" value="{$trTd[trTd].id}=>{$trTd[trTd].topicName}"  id="{$trTd[trTd].id}" /></td>
			<td>{$smarty.section.trTd.index + 1}</td>
			<td>{$trTd[trTd].topicName}</td>
			<td>
				<a href="#" onclick="editAn('{$editUrl}','{$trTd[trTd].id}')">编辑</a>&nbsp;
				删除
			</td>
		
	</tr>
	{/section}
	{/if}
	
</table>