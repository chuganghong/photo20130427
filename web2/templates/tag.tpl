<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={dede:global.cfg_soft_lang/}" />
<title>TAG标签 - {dede:global.cfg_webname/}</title>
<link href="{dede:global.cfg_templeturl/}/style/dedecms.css" rel="stylesheet" media="screen" type="text/css" />
<link rel="stylesheet" type="text/css" href="{dede:global.cfg_templets_skin/}/style/style.css" />
</head>
<body class="tagspage">
{dede:include filename="head.htm"/}
<!-- /header -->
<div class="w960 clear center mt1">
	<div class="sp-title"><h2>TAG标签</h2></div>

	<div class="tags_list">
		<dl class="tbox">
			<dt><strong>最新标签</strong></dt>
			<dd>
            {dede:tag row='60' sort='new'}
            <a href='/tags.php?/[field:tag /]' class='tagc[field:highlight /]'>[field:tag /]</a>
            {/dede:tag}
			</dd>
		</dl>
	</div>
	
	<div class="tags_list mt1">
		<dl class="tbox">
			<dt><strong>当月热门标签</strong></dt>
			<dd>
            {dede:tag row='60' sort='month'}
            <a href='/tags.php?/[field:tag /]' class='tagc[field:highlight /]'>[field:tag /]</a>
            {/dede:tag}
			</dd>
		</dl>
	</div>
	
	<div class="tags_list mt1">
		<dl class="tbox">
			<dt><strong>随机标签</strong></dt>
			<dd>
            {dede:tag row='100' sort='rand'}
            <a href='/tags.php?/[field:tag /]' class='tagc[field:highlight /]'>[field:tag /]</a>
            {/dede:tag}
			</dd>
		</dl>
	</div>
	
	

</div>
{dede:include filename="footer.htm"/}
<!-- /footer -->

</body>
</html>
