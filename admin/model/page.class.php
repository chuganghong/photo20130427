<?php
/*
 * 2013年5月22日
 * 分页类
 * 经过测试，此类可以正常使用。但是，测试此类，耗时非常非常多，让我抓狂，最后，通过看以前的代码，才
 * 用另一种方法实现了想要的效果。但是，关于JS操作<select><option>something</option></select>的选中
 * 状态的问题，我还是没有搞清楚。
 */
class page
{
	protected $total_page;    //总页数
	protected $url;           //页面URL
	protected $current_page;   //当前页
	
	
	function __construct($total_page,$url,$current_page)
	{
		$this->total_page = $total_page;
		$this->url = $url;
		$this->current_page = $current_page;
		
		
		
	}
	
	//一种风格的分页符：首页 上一页 下一页  跳到第【5】页 末页
	function one_cut_page()
	{
		$this->show_first_page();
		$this->show_pre_page();
		$this->show_next_page();
		$this->show_go_page($this->current_page);
		$this->show_end_page();
	}
	
	//上一页
	function show_pre_page()  //$this->current_page是当前页数
	{
		if( $this->current_page == 1 )
		{
			
			$str = '上一页';
			$str .= ' ';
		}
		else if( $this->current_page>1 )
		{
			$pre_page = $this->current_page-1;
			
			$str = '<a href="' . $this->url . '=' . $pre_page . '">上一页</a>';
			$str .= ' ';
		}
		echo $str;
	}
	
	//下一页
	function show_next_page()
	{
		if( $this->current_page == $this->total_page || $this->total_page == 0 )
		{
			
			$str = '下一页';
			$str .= ' ';
		}
		else if( $this->current_page<$this->total_page )
		{
			$next_page = $this->current_page + 1;
			
			$str = '<a href="' . $this->url . '=' . $next_page . '">下一页</a>';
			$str .= ' ';
		}
		echo $str;
	}
	
	//首页
	function show_first_page()
	{
		$str = '<a href="' . $this->url . '=1' . '">首页</a>';
		$str .= ' ';
		
		echo $str;
	}
	
	//末页
	function show_end_page()
	{
		$str = '<a href="' . $this->url . '=' . $this->total_page . '">末页</a>';
		echo $str;
	}
	
	//跳到某一页
	function show_go_page($page)
	{
		$this->js();   //跳转到某页的JS
		$str = '跳到第';
		$str .= '<select name="page" onchange= "go()" id="mySelect">';
		for($i=1;$i<=$this->total_page;$i++)
		{
			if( $i==$page )
			{
				$str .= '<option value="' . $i . '" selected="selected">' . $i . '</option>';
			}
			$str .= '<option value="' . $i . '">' . $i . '</option>';
		}
		$str .= '</select>页';
		$str .= ' ';
		
		echo $str;
	}
	
	//跳转到某页的JS
	function js()
	{
		$str = '<script type="text/javascript">';
		$str .= '
				function go()
				{
					pages = document.getElementById("mySelect").value;
					//alert(pages);  //test
					location.href="' . $this->url . '=" + pages;
				}
				</script>';
		echo $str;
	}
}
/*
//测试page.class.php
$current_page = $_GET['page'];
$page = new page(7,'page.class.php',$current_page);
*/
