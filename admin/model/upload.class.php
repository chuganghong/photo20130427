<?php
/**
 * 上传图片类
 * @author ggh
 *
 */
class upload
{
	protected $maxSize = 600000;    //允许上传的文件的最大数据大小
	protected $type;     //允许上传的文件的类型
	protected $size;     //上传的文件的数据大小
	protected $tmp_name;   //上传的文件在服务器的临时位置
	protected $name;       //上传的文件的原名称
	protected $newName;    //上传的文件的新名称
	protected $filepath;    //存储文件的路径，不含有服务器根目录。删除服务器上的文件或用URL访问此文件时，需在此值前加上根目录或主机名	
	
	/**
	 * 构造函数
	 * @param string $fileKey 上传文件表单<input type="file" name=" />中的name值
	 */
	function __construct($fileKey)
	{
		$file = $_FILES[$fileKey];
		$this->type = $file['type'];
		$this->size = $file['size'];
		$this->tmp_name = $file['tmp_name'];
		$this->name = $file['name'];
		
	}
	
	/**
	 * 检测上传文件的大小是否符合规定
	 * @return boolean 不符合规定返回false，符合规定返回true
	 */
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
	
	/**
	 * 获取上传文件的后缀
	 * @return string 上传文件的后缀，形如jpg，png等	 * 
	 */
	function getSuffix()  //获取上传文件的后缀
	{
		$str = explode('.',$this->name);
		//$suffix = $str[1];
		$suffix = $str[count($str)-1];
		return $suffix;
	}
	
	/**
	 * 检测是否为允许上传的文件
	 * @return boolean 是允许上传的文件返回true，不是允许上传的文件返回false
	 */
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
	
	/**
	 * 检测某文件能否上传
	 * @return void 但是运用die()输出了不允许上传的信息$msg
	 */
	function isAllow()
	{
		if( $this->isType() )
		{			
			$result = $this->isSize();
			if( !$result )
			{
				$msg = '文件太大了。';
				$js = $this->js();
				$mj = $msg . $js;
				die($mj);
			}
		}
		else
		{
			$msg = '不支持此种文件上传。';			
			$js = $this->js();
			$mj = $msg . $js;
			die($mj);			
		}		
	}
	
	/**
	 * 获取文件的新名称
	 * @return string $this->newName
	 */
	function getNewName()
	{
		return $this->newName;
	}
	
	/**
	 * 获取文件的存储路径，不含有DOCOMENT_ROOT
	 * @return string $this->filepath 文件在服务器上的存储路径，不含有根目录，在使用时需要加上$_SERVER['DOCUMENT_ROOT']
	 */
	function getFilepath()
	{
		return $this->filepath;
	}
	
	/**
	 * 上传文件
	 * @param string $dir 存储文件的目录
	 * @return boolean 上传成功返回true，上传失败返回false
	 */
	function up($dir)
	{
		$this->isAllow();
		$newName = time() . mt_rand() . '.' . $this->getSuffix();
		$this->filepath = $dir . '/' . $newName;
		$this->newName = $_SERVER['DOCUMENT_ROOT'] . '/' . $this->filepath;
		
		
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
	
	/**
	 * 上传文件后的跳转JS代码
	 * @return string $jsCode 执行跳转操作的JS代码
	 */
	function js()
	{
		$tip = '即将返回上一页。';
		$js = '<script>setTimeout("history.go(-1)",2000);</script>';
		$jsCode = $tip . $js;		
		return $jsCode;		
	}
	
}
		