<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD><META http-equiv=Content-Type content="text/html; charset=utf-8">
<TITLE></TITLE>
<META content="" name=keywords>
<META content="" name=description>
<LINK href="{$css}" type="text/css" rel="stylesheet">
</HEAD>
<BODY>

<div class="header" id="cen">
{include file="$header"}
</div>
</div>



<!-- 头屏右 -->
<div class="tpy">
<div class="title">最新加入</div>
<div class="tpy_list">
<ul>
{section name=new loop=$new}
<LI><a target="_blank" href="#" title="#">{$new[new]["albumName"]}</A></LI>
{/section}
</ul>
</div>

<div class="mt7"></div>
{include file="$footer"}
</BODY>
</HTML>
