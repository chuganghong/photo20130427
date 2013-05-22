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

function edit(editUrl)    //要实现这样的功能，当全选后再点击“编辑”，只对第一个进行编辑。//问题很多，搞不懂！！烦！
{
	var result = isGo();
	//alert(result);   //test////这个对话框为何不在运行中弹出？
	if( result && result !== '0' )  //点击编辑、新建等链接时触发
	{		
		var url = editUrl + "?which=edit&id=" + result;
		alert(url);  //test////这个对话框为何不在运行中弹出？
		location.href = url;
	}
	else
	{
		//do nothing
		alert(0);  //test
	}
}

function _delete(url)   //没有使用，不知是否正确
{
	result = isGo();
	if( result )   //result是什么？此刻我竟然看不懂之前自己写的代码，这说明：写注释非常必要！
	{
		var url = url + "?which=delete&id=" + result;
		//alert(url);  //test////这个对话框为何不在运行中弹出？
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
			//continue;
			if( inputs[i].value == '0' )
			{
				continue;
			}
			if( inputs[i].checked == true  )
			{
				//return true;
				var value2 = inputs[i].value;
				alert(value2);  //test
				return value2;
			}
		}
		else
		{
			return;
		}
	}
}

function isGo()   //点击编辑、新建等链接时触发
{
	//alert("start isGo");  //test
	result = isCheck();
	if( !result )
	{
		//alert("start result");//test
		alert("请至少选择一个项目进行操作！");
		return;
	}
	else
	{
		
		//alert(5);  //test//这个对话框为何不在运行中弹出？
		return result;
	}
}