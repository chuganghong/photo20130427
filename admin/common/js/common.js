function $(id)
{
	return document.getElementById(id);
}

/**
 * 定时跳转，并且显示倒计时，与timer()一起使用，没有使用，可以运行
 * @param url 要跳转到的页面URL
 * @param id 输出提示信息的HTML元素的ID
 * @param i  设定多少秒后跳转
 */
function setTimeGo(url,id,i)
{
	t = i;
	id_1 = id;
	url_1 = url;
	setInterval("timer()",1000);	
}

/**
 * 跳转到某个页面
 * 
 */
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

function editAn(editUrl,id)  //编辑一个
{
	result = document.getElementById(id).value;
	var url = editUrl + "?which=edit&id=" + result;
	alert(url);
	location.href = url;
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

/**
 * 删除图集或图片
 * @param string url 执行删除请求的后台代码URL
 * @param string id 存储发送到后台代码的数据的input的ID
 * @param integer o 是否验证选中了复选框 1验证，0不验证 
 * @returns void
 */
function deleteAlPic(url,id,o)    //删除图集或图片
{	
	if(o)
	{
		var result = isGo();
	}
	else
	{
		result =1;
	}
	if( result )
	{
		var params = [];
		var inputs = document.getElementsByTagName("input");
		var m=0;
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
					if( params[m] == "" )
					{						
						params[m] = inputs[i].value;
						m++;
					}
					else
					{
						params[m] = inputs[i].value;
						m++;						
					}
				}
			}
		}
		params = JSON.stringify(params);   //将变量转为JSON形式		
		myForm = document.getElementById('myForm');
		myForm.action = url;		
		document.getElementById(id).value = params;		
		myForm.submit();		
	}
}

/**
 * 删除一个图集
 * @param value
 * @param c
 */
function deleteAnAlPic(url,id1,id2)
{
	params = new Array();
	result = document.getElementById(id1).value;
	params[0] = result;
	
	params = JSON.stringify(params);   //将变量转为JSON形式		
	myForm = document.getElementById('myForm');
	myForm.action = url;		
	document.getElementById(id2).value = params;		
	myForm.submit();
}

//设置编辑的URL
function setEditUrl(value,c)
{	
	if( c == true )
	{		
		var ahref = document.getElementsByClassName("ade");
		
		for(var i=0;i<ahref.length;i++)
		{
			ahref[i].href += "&id=" + value;			
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
			//if( inputs[i].value == '0' )
			if( inputs[i].value == 'on' )
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