<!DOCTYPE hmtl>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>{$title}</title>
</head>


<frameset rows="5%,*,5%" ><!--如何才能去掉frame的边框？style="border:0 none"不起作用-->
	<frame src="{$adminIndexTop}">
	<frameset cols="15%,*" >
		<frame src="adminMenu.php" >
		<frame src="topicManage.php" name="adminIndexRight" >
	</frameset>
	<frame src="footer.php" >
</frameset>

</html>

