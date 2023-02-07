<?php
namespace common\components;

use common\models\AccountLedger;
use DateInterval;
use DatePeriod;
use DateTime;
use Yii;
// require_once '../../php-emoji-master/lib/emoji.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Helper{

	public static function toUnified($data){
		// $data = emoji_docomo_to_unified($data);   # DoCoMo devices
		// $data = emoji_kddi_to_unified($data);     # KDDI & Au devices
		// $data = emoji_softbank_to_unified($data); # Softbank & pre-iOS6 Apple devices
		// $data = emoji_google_to_unified($data);   # Google Android devices
		return $data;
	}

	public static function toUnUnified($data){
		// $data = emoji_unified_to_docomo($data);   # DoCoMo devices
		// $data = emoji_unified_to_kddi($data);     # KDDI & Au devices
		// $data = emoji_unified_to_softbank($data); # Softbank & pre-iOS6 Apple devices
		// $data = emoji_unified_to_google($data);   # Google Android devices
		return $data;
	}
	
	static $days = [
		'0' => 'All Day',
		'7' => 'Every Sunday',
		'1' => 'Every Monday',
		'2' => 'Every Tuesday',
		'3' => 'Every Wednesday',
		'4' => 'Every Thursday',
		'5' => 'Every Friday',
		'6' => 'Every Saturday',
	];
	
	static $daysNonHour = [
		'0' => 'All Day',
		'7' => 'Sunday',
		'1' => 'Monday',
		'2' => 'Tuesday',
		'3' => 'Wednesday',
		'4' => 'Thursday',
		'5' => 'Friday',
		'6' => 'Saturday',
	];
	
	static $isPaid = [
		1=>'Unpiad',
		2=>'Partial Paid',
		3=>'Paid'
		
	];
	
	static $isPaidText = [
		1=>'Unpiad',
		2=>'Partial Paid',
		3=>'Paid',
		4=>'Canceled'
		
	];
	
	
	static $bookingStatus = [
		0=>'Unconfirmed',
		1=>'Confirmed',
		2 =>'Canceled',
		3=>'Date Changed'
	];
	
		
    public function getStatus(){
        return [
            1=>'Active',
            2=>'Inactive'
        ];
    }

    public function getNumber($start = 1, $end = 10, $step = 1){
        $number = [];
        for($i=$start;$i<=$end;$i = $i + $step){
            $number[$i] = $i;
        }
        return $number;
    }
	
	
	public static function getTotalDays($startDay, $endDay, $day){
		$begin  = new DateTime($startDay);
		$end    = new DateTime($endDay);
		
		$days = [];
		
		while ($begin <= $end) // Loop will work begin to the end date 
		{
			
			
			if($begin->format("N") == $day) //Check that the day is Sunday here
			{
				$days[$begin->format("Y-m-d")] = $begin->format("Y-m-d") ;
			}

			$begin->modify('+1 day');
		}
		
		return $days;
	}
	
	
	public static function getAllTotalDays($startDay, $endDay, $day){
		$begin  = new DateTime($startDay);
		$end    = new DateTime($endDay);
		
		$days = [];
		
		while ($begin < $end) // Loop will work begin to the end date 
		{
			
			$days[$begin->format("Y-m-d")] = $begin->format("Y-m-d") ;
			
			$begin->modify('+1 day');
		}
		
		return $days;
	}
	
	
	public static function getStartTime($startTime, $endTime, $minTime, $step = '30 min', $endStatus= false){
		
		$begin = new DateTime($startTime);
		$end   = new DateTime($endTime);
		
		
		$intervalSub = DateInterval::createFromDateString($minTime.' min');

		$interval = DateInterval::createFromDateString($step);

		$times    = new DatePeriod($begin, $interval, $end);
		
		$timeArray = [];
		$stime = date('H:i', strtotime($startTime));
		
		if( $endStatus == false) $timeArray[$stime] = $stime;
		
		foreach ($times as $time) {
			
			
			$timeConvert = $time->add($interval)->format('H:i');
			
			$t = strtotime($timeConvert);
			$limit = date('H:i', strtotime('+'.$minTime .'min', $t));
			
			if($limit < $endTime && $endStatus == false){
				$timeArray[$timeConvert] = $timeConvert;
			}else if($timeConvert <= $endTime && $endStatus == true){
				$timeArray[$timeConvert] = $timeConvert;
			}
		}
		
		
		return $timeArray;
		
		
	}
	
	static $debitCredit = [
		1=>'Debit',
		2=>'Credit'
		
	];
	
	static $status = [
		1=>'Active',
		0=>'Inactive',
		10=>'Active',
		2 =>'Canceled',
		
	];
	
	public static function isActiveMenu($url){
		if(is_array($url)){
			if(count($url)==1){
				$urlArr = $url;
				$urlPeices = explode('/',$urlArr[0]);
				$controller = $urlPeices[0];
				if(empty($controller)){
					$controller = $urlPeices[1];
				}
				$action = $urlPeices[1];
				if(isset($urlPeices[2])){
					$controller = $action;
					$action = $urlPeices[2];
					if(Yii::$app->controller->id==$controller && $action=='purchased-item'){
						return true;
					}else return false;
					if(Yii::$app->controller->id==$controller && $action=='index'){
						return true;
					}else return false;
				}
				
				if(isset($urlPeices[0]) && !empty($urlPeices[0])){
					if(Yii::$app->controller->id==$controller && Yii::$app->controller->action->id==$action){
						return true;
					}else return false;
				}else{
					//echo 'I am here';
					if(Yii::$app->controller->id==$controller){
						return true;
					}else return false;
				}
				
				
			}else{
				
				$urlArr = $url;
				$urlPeices = explode('/',$urlArr[0]);
				
				$controller = $urlPeices[0];
				$action = $urlPeices[1];
				if(!empty($action)){
					if(Yii::$app->controller->id==$controller && Yii::$app->controller->action->id==$action && ( (isset($url['id']) && $url['id']==$_GET['id']) || (isset($url['serviceid']) && $url['serviceid']==$_GET['serviceid'])) ){
						return true;
					}else return false;
				}else{
					
					if(Yii::$app->controller->id==$controller){
						return true;
					}else return false;
				}
				
			}
		}else return false;

	
	}
	
public static function grouppArrayByValue($data, $reqKey, $returnArray = true){
  $arr = [];

  foreach($data as $key => $item)
  {
   //if(!empty($item[$conditionKey]))
   $arr[$item[$reqKey]][$key] = $item;
  }
  
  ksort($arr, SORT_NUMERIC);
  
  return $arr;
 }
 
 public static function grouppArrayByValueResetKey($data, $reqKey, $returnArray = true){
  	$arr = [];
	$i=0;foreach($data as $key => $item)
	{
	//if(!empty($item[$conditionKey]))
		$arr[$item[$reqKey]][$item['dr_cr']] = $item;
		if(isset($arr[$item[$reqKey]]) && count($arr[$item[$reqKey]])==2){
			$i=0;
		}else $i=1;
	
	}
	
	ksort($arr, SORT_NUMERIC);
	
	return $arr;
	}

	
	public static function backupDb($filepath, $tables = '*') {

		if ($tables == '*') {

			$tables = array();

			$tables = Yii::$app->db->schema->getTableNames();

		} else {

			$tables = is_array($tables) ? $tables : explode(',', $tables);

		}

		$return = '';


		foreach ($tables as $table) {

			$result = Yii::$app->db->createCommand('SELECT * FROM ' . $table)->query();

			$return.= 'DROP TABLE IF EXISTS ' . $table . ';';

			$row2 = Yii::$app->db->createCommand('SHOW CREATE TABLE ' . $table)->queryOne();

			$return.= "\n\n" . $row2['Create Table'] . ";\n\n";

			foreach ($result as $row) {

				$return.= 'INSERT INTO ' . $table . ' VALUES(';

				foreach ($row as $data) {

					$data = addslashes($data);


					// Updated to preg_replace to suit PHP5.3 +

					$data = preg_replace("/\n/", "\\n", $data);

					if (isset($data)) {

						$return.= '"' . $data . '"';

					} else {

						$return.= '""';

					}

					$return.= ',';

				}

				$return = substr($return, 0, strlen($return) - 1);

				$return.= ");\n";

			}

			$return.="\n\n\n";

		}

		//save file

		$handle = fopen($filepath, 'w+');

		fwrite($handle, $return);

		fclose($handle);

	}

	public static function setConfigData(){
		$session = Yii::$app->session;
		// if (($cookie = $session->get('mst_data')) === null) {
			$sql = "select id,value, slug from {{%setting}} where id in(44,45) order by id desc";
			$result = Yii::$app->db->createCommand($sql)->queryAll();
			$data = serialize($result);
			$session['mst_data'] = $data;
			
		// }
	}

	public static function getConfigData(){
		$session = Yii::$app->session;
		if (($cookie = $session->get('mst_data')) !== null) {
			return unserialize($cookie);
		}
		return false;
	}

	public static function getSiteImage($type,$name){
		$sql = "select value from {{%setting}} where type='$type'";
		$result = Yii::$app->db->createCommand($sql)->queryOne();
		if(!empty($result)){
			$data = json_decode($result['value'],true);
			if(!empty($data)){
				foreach($data as $imgData){
					if($imgData['type']==$name){
						$image ='https://www.mountainsherpatrekking.com/images/extraimage/'.$imgData['image'];
						return $image;
					}
				}
			}
		}
		return false;

	}
}

