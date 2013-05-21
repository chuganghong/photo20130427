{* 新增编辑栏目FORM *}
<form action="{$url}" method="post">
<input type="text" name="topicName" value="{$topicName}" />
<input type="hidden" name="which" value="{$which}" />
<input type="hidden" name="topicId[]" value="{$topicId}" />
<br />
<input type="submit" value="{$value}" />

<input type="reset" value="重置" />
</form>