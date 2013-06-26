<?php
/*
 * 为list.php提供数据
 */
require('RecommendAlbum.class.php');
class ListPartA extends IndexPart implements NewAlbums
{
	public function getNewAlbums($start)
	{
		$num = 24;
		$topicId = $this->topicId;
		$data = $this->recommendAlbum->getNewAlbum($start,$num,$topicId);
	}
}