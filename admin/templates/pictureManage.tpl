{*图片管理*}
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
	<table>
		<tr>			
			<td><button onclick='deleteAlPic("{$deletePicUrl}","picIds",1)'>删除</button></td>			
		</tr>
	</table>
</p>
<p>
<table>
	<tr>
		<th><input type="checkbox" name="box" id="check" onchange="chose(this.id)" /></th>
		{section name=th loop=$th}
		<th>{$th[th]}</th>
		{/section}
	</tr>
	{section name=td loop=$td}
	<tr>
		<td width="5%"><input type="checkbox" name="boxes[]" value="{$td[td].id}|{$td[td].pictureUrl}" /></td>
		<td width="10%">{$td[td].id}</td>
		<td width="60%" align="center">
		
		{if $td[td].ln eq 1}
		<img src="{$host}/{$td[td].pictureUrl}" width="350" height="300" /></td>
		{else}
		<img src="{$td[td].pictureUrl}" width="350" height="300" /></td>
		{/if}
		
		<td width="25%"><a href="{$deletePicUrl}?picIdUrls={$td[td].id}|{$td[td].pictureUrl}">删除</span></td>
	</tr>
	{/section}
</table>
<form method="post" id="myForm">
<input type="hidden" name="picIdUrls" id = "picIds" />
</form>
	