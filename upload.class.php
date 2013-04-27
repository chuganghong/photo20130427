<?php
/*
	上传图片类
*/
class upload
{
	protected $maxSize = 600000;
	protected $type;
	protected $size;
	protected $tmp_name;
	protected $name;
	protected $newName;
	//protected $
	
	function __construct($fileKey)
	{
		$file = $_FILES[$fileKey];
		$this->type = $file['type'];
		$this->size = $file['size'];
		$this->tmp_name = $file['tmp_name'];
		$this->name = $file['name'];
		
	}
	
	function isSize()   //检测上传文件大小
	{
		if( $this->size > $this->maxSize )
		{
			$result = false;
		}
		else
		{
			$result = true;
		}
		return $result;
	}
	
	function getSuffix()  //获取上传文件的后缀
	{
		$str = explode('.',$this->name);
		$suffix = $str[1];
		return $suffix;
	}
	
	function isType()   //是否为允许上传的文件
	{
		$arr = array('gif','jpg','jpeg','png');
		$suffix = strtolower($this->getSuffix());
		if( in_array($suffix,$arr) )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function isAllow()
	{
		if( $this->isType() )
		{
			/*
			//$msg = true;
			if( $this->isSize() )
			{
				$msg = true;
			}
			else
			{
				$msg = '文件太大了。';
			}
			*/
			$result = $this->isSize();
			if( !$result )
			{
				$msg = '文件太大了。';
				die($msg);
			}
		}
		else
		{
			$msg = '不支持此种文件上传。';
			die($msg);
		}
		
	}
	
	function getNewName()
	{
		return $this->newName;
	}
	
	function up()
	{
		$this->isAllow();
		$newName = time() . mt_rand() . '.' . $this->getSuffix();
		$this->newName = 'uploads/'. $newName;
		
		$bool = move_uploaded_file($this->tmp_name,$this->newName);
		
		if( $bool )
		{
			$msg = '上传图片成功';
			echo $msg;
			return true;
		}
		else
		{
			$msg = '上传图片失败';
			echo $msg;
			return false;
		}
		
	}
	
}
		