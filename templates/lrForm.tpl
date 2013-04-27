{include file="header.tpl"}

<form action="{$action}" method="post">
UserName:
<input type="text" name="userName" />
<input type="hidden" name="which" value="{$which}" />{* 识别是用户登录还是管理员登录 *}
Password:
<input type="password" name="password" />
<input type="submit" value="{$value}" />
</form>

{include file="footer.tpl"}