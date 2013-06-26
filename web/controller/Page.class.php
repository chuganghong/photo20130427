<?php
/**
 * 分页符类
 */
abstract class Page
{
	protected $currentPage;
	protected $sum;
	protected $link;
	protected $str = '';
	
	function __construct($currentPage,$sum,$link)
	{
		$this->currentPage = $currentPage;
		$this->sum = $sum;
		$this->link = $link;
	}
	
	function display($which)
	{
		$this->showSumPage();
		$this->showFirstPage();
		$this->showPrePage();
		
		$this->showCommonPage($which);
		
		$this->showNexPage();
		$this->showLastPage();
		return $this->str;
	}
	
	abstract public function showSumPage();
	abstract public function showFirstPage();
	abstract public function showPrePage();
	abstract public function showCommonPage($which);
	abstract public function showNexPage();
	abstract public function showLastPage();
	
}
class PageList extends Page
{	
	function showSumPage()
	{
		//do nothing
	}
	function showFirstPage()
	{
		$link = $this->link . 1;
		$str = <<<EOT
<div class="page">
	<ul>
    	<li><a href="$link"><span>首页</span></a></li>
EOT;
		$this->str .= $str;
	}
	
	function showPrePage()
	{
		if($this->currentPage>1)
		{
			$link = $this->link . ($this->currentPage-1);
			$str = <<<EOT
<li><a href="$link"><span>上一页</span></a></li>
EOT;
		}
		else
		{
			$str = '';
		}
		$this->str .= $str;
	}
	
	function showCommonPage($which)
	{
		switch($which)
		{
			case 'A':
				$this->showCommonPageA();
				break;
			case 'B':
				$this->showCommonPageB();
		}
	}
	
	function showCommonPageA()
	{
		$str = '';
		
		for($i=1;$i<=$this->sum;$i++)
		{
			$link = $this->link . $i;
			if($i==$this->currentPage)
			{
				$str .= <<<EOT
<li><span class="current">$i</span></li>
EOT;
			}
			else
			{
				$str .= <<<EOT
<li><a href="$link"><span>$i</span></a></li>
EOT;
			}
		}
		$this->str .= $str;
	}
	
	function showCommonPageB()
	{
		$str = '';
		$deadLine = 5;
		if( $this->currentPage<$deadLine )
		{
			$end = 10;
			for($i=1;$i<=$end;$i++)
			{
			if($i==$this->sum):
			break;
			endif;
			if($this->currentPage==$i)
			{
				$str .= <<<EOT
<li><span class="current">$i</span></li>
EOT;
			}
				else
				{
					$link = $this->link . $i;
					$str .= <<<EOT
<li><a href="$link"><span>$i</span></a></li>
EOT;
				}
						}
						}
						else
						{
							$start = $this->currentPage-5;
							$end = $this->currentPage + 5;
							if( $end>=$this->sum )
							{
								$end = $this->sum;
							}
								
							if( $start<=1 )
							{
								$start = 1;
							}
							for( $i=$start;$i<=$end;$i++ )
							{
								if($this->currentPage==$i)
								{
									$str .= <<<EOT
<li class="current"><span>$i</span></li>
EOT;
								}
								else
								{
									$link = $this->link . $i;
									$str .= <<<EOT
<li><a href="$link"><span>$i</span></a></li>
EOT;
								}
							}
						}
						$this->str .= $str;
	}
	
	function showNexPage()
	{
		if($this->currentPage==$this->sum)
		{
			$str = '';
		}
		else
		{
			$link = $this->link . ($this->currentPage+1);
			$str = <<<EOT
<li><a href="$link"><span>下一页</span></a></li>
EOT;
		}
		$this->str .= $str;
	}
	
	function showLastPage()
	{
		$link = $this->link . $this->sum;
		$str = <<<EOT
<li><a href="$link"><span>末页</span></a></li></ul></div>   
EOT;
		$this->str .= $str;
	}
}

class PagePic extends page
{
	function showSumPage()
	{
		$str = '<div id="page"><ul><li><a href="#">共' . $this->sum . '页</a></li>';
		$this->str .= $str;
	}
	
	function showFirstPage()
	{
		//
	}
	
	function showPrePage()
	{
		if($this->currentPage>1)
		{
			$link = $this->link . ($this->currentPage-1);
			$str = <<<EOT
<li><a href="$link">上一页</a></li>
EOT;
		}
		else
		{
			$str = '';
		}
		$this->str .= $str;
	}
	
	function showCommonPage($which)
	{
		$str = '';
		$deadLine = 5;
		if( $this->currentPage<$deadLine )
		{
			$end = 10;
			for($i=1;$i<=$end;$i++)
			{
				if($i==$this->sum):
					break;
				endif;
				if($this->currentPage==$i)
				{
					$str .= <<<EOT
<li class="current">$i</li>
EOT;
				}
				else
				{
					$link = $this->link . $i;
					$str .= <<<EOT
<li><a href="$link">$i</a></li>
EOT;
				}
			}
		}
		else
		{
			$start = $this->currentPage-5;
			$end = $this->currentPage + 5;
			if( $end>=$this->sum )
			{
				$end = $this->sum;
			}
			
			if( $start<=1 )
			{
				$start = 1;
			}
			for( $i=$start;$i<=$end;$i++ )
			{
				if($this->currentPage==$i)
				{
					$str .= <<<EOT
<li class="current">$i</li>
EOT;
				}
				else
				{
					$link = $this->link . $i;
					$str .= <<<EOT
<li><a href="$link">$i</a></li>
EOT;
				}
			}
		}
		$this->str .= $str;
	}
	
	
	function showNexPage()
	{
		if($this->currentPage==$this->sum)
		{
			$str = '</div>';
		}
		else
		{
			$link = $this->link . ($this->currentPage+1);
			$str = <<<EOT
			<li><a href="$link">下一页</a></li></ul></div>
EOT;
		}
		$this->str .= $str;
	}
	
	function showLastPage()
	{
		//
	}
}