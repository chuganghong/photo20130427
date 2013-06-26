<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<TITLE>{dede:field.title/}-秀站网_{dede:global.cfg_webname/}</TITLE>
<META content="{dede:field.title/}" name=keywords>
<LINK href="{dede:global.cfg_templets_skin/}/style/style.css" type=text/css rel=stylesheet>
<script language="javascript" type="text/javascript">
//下一张
  var shortname = "{dede:global.art_shortname/}";
  var npage = {dede:field name='nowpage'/};
	var totalpage = {dede:field name='totalpage'/};
	var namehand = '{dede:field name='namehand'/}';
	var displaytype = '{dede:field name='displaytype'/}';
	function dPlayNext()
	{
		if(npage==totalpage) { alert("已到达最后一张"); }
		else
		{
			if(displaytype=='st' && namehand!='') location.href = namehand+"_"+(npage+1)+shortname;
			else location.href = "view.php?aid={dede:field name='id'/}&pageno="+(npage+1);
		}
	}
</script>
</HEAD><BODY>
{dede:include filename="head.htm"/}
<!-- 推荐 -->
<div class="rec" id="cen"><div class="pt">
<div class="litimg"><img src="{dede:field.litpic/}" height="160" width="120" /></div>
<div class="contitle"><span>[&nbsp;{dede:type}[field:typename /]{/dede:type}&nbsp;]</span><h1>{dede:field.title/}</h1></div>
<div class="key">
{dede:tag sort='new' getall='0'}<a href='/tags.php?/[field:tag /]'>[field:tag /]</a>{/dede:tag}
</div>
<div class="updown">{dede:prenext get='pre'/} | {dede:prenext get='next'/}</div>
<div class="dis">当前第<span class="bignum">{dede:field.nowpage/}</span>张 / 共<span>{dede:field.totalpage/}</span>张　发表时间：{dede:field.pubdate function="MyDate('Y-m-d',@me)"/}　人气：
{dede:field.click/}↑
</div>
</div>
<div class="page_ad"><img src="{dede:global.cfg_templets_skin/}/style/4.jpg" /></div>
<div class="inner"><div class="imgbox">
{dede:field name='imgurls' alt='图片输出区'}
[field:pagestyle runphp='yes'] @me= (@me==3 ? '<li>' : '');[/field:pagestyle]
<a href='javascript:dPlayNext();' [field:pagestyle runphp='yes'] @me= (@me==3 ? 'class="pic"' : ''); [/field:pagestyle]><img src='[field:imgsrc/]' id='bigimg' onload='javascript:if(this.width>900)this.width=900' border='0' alt='[field:title /]' /></a><br />
<a href='[field:imgsrc/]' target='_blank' title='[field:title /]'>[field:title /]</a>
 [field:pagestyle runphp='yes'] @me = (@me==3 ? '</li>' : ''); [/field:pagestyle]{/dede:field}
             {dede:field name='pagestyle' alt='根据不同的风格输出不同的结尾信息' runphp='yes'}
                if(@me==3) {
                @me = '';
                }
                else if(@me==2) {
                	@me = "\r\n";
               	}
               	else {
               		@me = '';
                }
             {/dede:field}</div>
<div class="pagelist">{dede:pagebreak/}</div></div></div>
<div class="mt7"></div>
<!-- 推荐美图 --> 
<div class="box" id="cen">
<div class="title"><a href="http://www.xiuzhanwang.com">推荐美图</a></div>
<div class="inner">
<div class="rec_text">
<div class="rec_title">热点排行</div>
{dede:arclist row=6 titlelen=40 orderby='hot'}<LI><a target="_blank" href="[field:arcurl/]" title="[field:title/]">[field:title/]</A></LI>{/dede:arclist}
</div>
<div class="rec_pic">
{dede:arclist row=5 channelid=2 titlelen=40 orderby='pubdate'}
<div class="pic"><a target="_blank" href="[field:arcurl/]" title="[field:title/]"><img src="[field:litpic/]" /><span>[field:title/]</span></a></div>{/dede:arclist}
</div></div></div>
<div class="mt7"></div>
<!-- 随便看看 -->
<div class="box" id="cen">
<div class="title">随便看看</div>
<div class="inner">
<div class="rec_pic">
{dede:arclist row=6 channelid=2 titlelen=40 orderby='rand'}<div class="pic"><a target="_blank" href="[field:arcurl/]" title="[field:title/]"><img src="[field:litpic/]" /><span>[field:title/]</span></a></div>{/dede:arclist}</div></div></div>
<div class="mt7"></div>
{dede:include filename="footer.htm"/}
</BODY>
</HTML>
