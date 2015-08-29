<?php
/**
 * 抓取类  
 * 
 * @version 2010-6-1
 * @author Zerolone
 */

class Snatch {
	public $content;     //内容
	public $title;       //标题
	public $price;       //价格
	public $pic;         //图片
	public $url;         //地址
	public $date;        //日期
	public $person;      //人数
	public $limitperson; //最低人数
	public $tuanorder;
	
//	public $tid;

	/**
	 * 初始化， 
	 * @param 网址 $url
	 * @param 是否utf8编码 $bool_utf8
	 * 
	 */
	function __construct($url = '',$is_utf8=0) {
		$this->content = $this->getContent ( $url );
		//网页不为UTF8的 话， 转换一下， 好像是不需要
		if ($is_utf8!=0){
			$this->content=iconv("GBK", "UTF-8", $this->content); 
		}
	}
	
	/**
	 * 抓取内容，返回抓取的内容，用@屏蔽错误，抓取3次
	 * @param 网址 $url
	 */
	private function getContent($url) {
		$opts = array( 
				'http'=>array(
					'method'  => 'GET',
					'timeout' => STIME,
				) 
		); 
		$context = stream_context_create($opts); 

		$cnt=0; 
		while($cnt < 3 && ($str=@file_get_contents($url))===FALSE) $cnt++;
		
		return $str;	
	}
	
	/**
	 * 解析所有内容
	 * 
	 * @param $content
	 * @param $title
	 * @param $price
	 * @param $pic
	 * @param $url
	 * @param $date
	 * @param $person
	 * @param $limitperson
	 * @param $tfill
	 * @param $tuanorder
	 */
	public function getAll($content, $title, $price, $pic, $url, $date, $person, $limitperson, $tfill, $tpicfill, $tuanorder){
		//内容规则
		@preg_match($content, $this->content, $matches);
		@$this->content = $matches[1];
		//echo $this->content;
		
		//标题规则
		@preg_match($title, $this->content, $matches);
		@$this->title = $matches[1];
		
		//价格规则
		@preg_match($price, $this->content, $matches);
		@$this->price = $matches[1];
		
		//pic规则
		@preg_match($pic, $this->content, $matches);
		@$this->pic= $matches[1];
		if ($tpicfill!=''){
			$pos = strpos($this->pic, $tpicfill);
			if ($pos===false){
				$this->pic=$tpicfill.$this->pic;
			}
		}
		
		//$url规则
		@preg_match($url, $this->content, $matches);
		@$this->url= $matches[1];
		if ($tfill!=''){
			$pos = strpos($this->url, $tfill);
			if ($pos===false){
				$this->url=$tfill.$this->url;
			}
		}
		
		//$date规则
		@preg_match($date, $this->content, $matches);
		@$this->date= strip_tags($matches[1]);
		
		//$person规则
		@preg_match($person, $this->content, $matches);
		@$this->person = $matches[1];
		
		//$matches规则
		@preg_match($limitperson, $this->content, $matches);
		@$this->limitperson = $matches[1];
		
		//顺序
		$this->tuanorder = $tuanorder;
		
	}
	
	public function todb($MyDatabase, $tid){
		set_time_limit(600);
		
		//当前仅判断一下标题是否为空
		if ($this->title!=''){
			$ArrField=array(      'title',       'price',       'pic',       'url',       'date',       'person',       'limitperson', 'uptime', 'order');
			$ArrValue=array($this->title,  $this->price,  $this->pic,  $this->url,  $this->date,  $this->person,  $this->limitperson, TIMESTAMP, $this->tuanorder);
			
			//搜索是否存在相同内容，这里仅判断url
			$SqlStr	= ' SELECT * FROM `' .DB_TABLE_PRE. 'tuan` WHERE `url`= \'' . $this->url . '\'';
			$MyDatabase->SqlStr = $SqlStr;
//			echo $SqlStr;
			if ($MyDatabase->Query ()) {
				$DB_Record = $MyDatabase->ResultArr [0];
				//更新
				if($MyDatabase->Update('tuan', $ArrField, $ArrValue, 'id='. $DB_Record['id'])){
					echo '团购：[<font color=blue>'.$this->title.'</font>]，更新<font color=red>成功</font>。<br />';
					flush();
					
					$ArrField=array('uptime',   'upsuccess');
					$ArrValue=array(TIMESTAMP,  1);
					if($MyDatabase->Update('tuanlist', $ArrField, $ArrValue , '`tid`='.$tid)){
					}
				}
			}else {
				//添加
				if($MyDatabase->Insert('tuan', $ArrField, $ArrValue)){
					echo '团购：[<font color=blue>'.$this->title.'</font>]，添加<font color=red>成功</font>。<br />';
					flush();
					
					$ArrField=array('uptime',   'upsuccess');
					$ArrValue=array(TIMESTAMP,  1);
					if($MyDatabase->Update('tuanlist', $ArrField, $ArrValue , '`tid`='.$tid)){
					}
				}
			}
		}else {
			$ArrField=array('uptime',   'upsuccess');
			$ArrValue=array(TIMESTAMP,  0);
			if($MyDatabase->Update('tuanlist', $ArrField, $ArrValue , '`tid`='.$tid)){
			}
				
			echo '团购：[<font color=blue>'.$this->title.'</font>]，添加失败。<br />';
//				DebugStr($MyDatabase->SqlStr);
		}
	}
}

?>