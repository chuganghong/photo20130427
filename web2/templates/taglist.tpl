<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<TITLE>{dede:field.title/}_秀站网-{dede:global.cfg_webname/}</TITLE>
<LINK href="{dede:global.cfg_templets_skin/}/style/style.css" type=text/css rel=stylesheet>
</HEAD><BODY>
{dede:include filename="head.htm"/}
<!-- 推荐 -->
<div class="rec" id="cen">
<div class="title">{dede:field.title/}</div>
<div class="inner">
<div class="pagelist">{dede:pagelist/}</div>
<div>{dede:list row='20' pagesize='20'}<li class="pic"><a href="[field:arcurl/]" title="[field:title/]" target="_blank"><img src="[field:litpic/]"><span>[field:title/]</span></a></li>{/dede:list}</div>
<div class="pagelist">{dede:pagelist/}</div>
</div></div>
<div class="mt7"></div>
<!-- 热点美图 -->
<div class="box" id="cen">
<div class="title"><a href="http://www.xiuzhanwang.com" target="_blank">热点美图</a></div>
<div class="inner">
<div class="rec_pic">
{dede:arclist row=6  orderby='hot' titlelen=50}<div class="pic"><a href="[field:arcurl/]" title="[field:title/]" target="_blank"><img src="[field:litpic/]"><span>[field:title/]</span></a></div>{/dede:arclist}
</div></div></div>
<div class="mt7"></div>
{dede:include filename="footer.htm"/}
</BODY></HTML>
