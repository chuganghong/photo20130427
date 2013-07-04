{* 新增编辑栏目FORM *}
<form action="{$url}" method="post">
<p>
	<input type="text" name="topicName" value="{$topicName}" />
</p>
<input type="hidden" name="which" value="{$which}" />
<input type="hidden" name="topicId[]" value="{$topicId}" />
<p>
<input type="submit" value="{$value}" />

<input type="reset" value="重置" />
</p>
</form>