function $(id)
{
	return document.getElementById(id);
}

//定时跳转
function setTimeGo(url,id,i)
{
	t = i;
	id_1 = id;
	url_1 = url;
	setInterval("timer()",1000);	
}

function timer()   //与setTimeGo()配合使用
{
	var tip = (t--) + "秒后返回";
	document.getElementById(id_1).innerHTML = tip;
	if( t == 0 )
	{
		location.href = url_1;
	}
}
function chose(id)
{
	//alert("start chose");//test
	var inputs = document.getElementsByTagName("input");
	//alert(inputs.length);//test
	if( $(id).checked == true )
	{		
		//alert("start checked");//test
		for(var i=0;i<inputs.length;i++)
		{
			if( inputs[i].type == "checkbox" )
			{
				//alert("start = checkbox");//test
				inputs[i].checked = true;
			}
		}
	}
	else
	{
		for(var i=0;i<inputs.length;i++)
		{
			if( inputs[i].type = "checkbox" )
			{
				inputs[i].checked = false;
			}
		}
	}
}

function edit(editUrl)
{
	var result = isGo();
	if( result )  //点击编辑、新建等链接时触发
	{
		var url = editUrl + "?which=edit&id=" + result;
		alert(url);  //test
		location.href = url;
	}
	else
	{
		//do nothing
	}
}

function _delete(url)   //没有使用，不知是否正确
{
	var result = isGo();
	if( result )
	{
		var url = url + "?which=delete&id=" + result;
		alert(url);  //test
		location.href = url;
	}
}

function deletePic(url)    //删除图片
{
	var result = isGo();
	if( result )
	{
		var params = "";
		var inputs = document.getElementsByTagName("input");
		for(var i=0;i<inputs.length;i++)
		{
			if( inputs[i].type == "checkbox" )
			{
				if( inputs[i].checked == true )
				{
					if( inputs[i].value == "on" )
					{
						continue;
					}
					//alert(inputs[i].value);  //test
					if( params == "" )
					{
						params = inputs[i].value;
					}
					else
					{
						params += "~" + inputs[i].value ;
					}
				}
			}
		}
		var url = url + "?picIdUrls=" + params;
		location.href = url;
	}
}

function deleteAlbum(url)    //删除图集
{
	alert("start deleteAlbum");//test
	
	var result = isGo();
	if( result )
	{
		var params = "";
		var inputs = document.getElementsByTagName("input");
		for(var i=0;i<inputs.length;i++)
		{
			if( inputs[i].type == "checkbox" )
			{
				if( inputs[i].checked == true )
				{
					if( inputs[i].value == "on" )
					{
						continue;
					}
					//alert(inputs[i].value);  //test
					if( params == "" )
					{
						params = inputs[i].value;
					}
					else
					{
						params += "~" + inputs[i].value ;
					}
				}
			}
		}
		var url = url + "?albumIds=" + params;
		alert(url);  //test
		location.href = url;
	}
}




//设置编辑的URL
function setEditUrl(value,c)
{
	
	//alert("start setEditUrl");//test
	//alert("Value:" + value);  //test
	//alert(c);  //test
	//var i = '';
	//alert(
	if( c == true )
	{
		//alert("start this.checked");
		var ahref = document.getElementsByClassName("ade");
		//alert(ahref.length);  //test
		for(var i=0;i<ahref.length;i++)
		{
			ahref[i].href += "&id=" + value;
			//var href = ahref[i].href;  //test
			//alert(href);  //test
		
		//var href = href + "&id=" + value;
		//alert(href);
		}
	}
}

function isCheck()   //检测是否选中了至少一个checkbox
{
	//alert("start isCheck");  //test
	var inputs = document.getElementsByTagName("input");
	for(var i=0;i<inputs.length;i++)
	{
		if( inputs[i].type == "checkbox" )
		{
			if( inputs[i].checked == true )
			{
				//return true;
				var value = inputs[i].value;
				return value;
			}
		}
	}
}

function isGo()   //点击编辑、新建等链接时触发
{
	//alert("start isGo");  //test
	var result = isCheck();
	if( !result )
	{
		//alert("start result");//test
		alert("请至少选择一个项目进行操作！");
		return false;
	}
	else
	{
		return result;
	}
}