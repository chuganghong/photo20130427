{include file="{$header}"}

<style type="text/css">
p { padding-left:35%; }

</style>
<form action="{$action}" method="post">
<p>
UserName:
<input type="text" name="userName" />
</p>
<input type="hidden" name="which" value="{$which}" />{* 识别是用户登录还是管理员登录 *}
<p>
Password:
<input type="password" name="password" />
</p>
<p>
<input type="submit" value="{$value}" />
</p>
</form>

{*include file="$footer"*}