<?php
namespace common\components;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class HBLPayment{
	
	public $paymentGatewayID = '9103333019';
	private $secretKey = '6DJJ5H0G6B9B1AUW55WRK8B8VU1S6DMK';
	public $_booking = ""; 
	public $currencyCode = "840";
	public $nonSecure = "N";
	
	public $postUrl = "https://hblpgw.2c2p.com/HBLPGW/Payment/Payment/Payment";
	
	public $_response = array(); 

	public function getHash(){
		$signatureString = $this->paymentGatewayID;
		$signatureString .= $this->_booking->id;
		$signatureString .= $this->_booking->formatAmount;
		$signatureString .= $this->currencyCode;
		$signatureString .= $this->nonSecure;
		
				
		$signData = hash_hmac('SHA256', $signatureString,$this->secretKey, false);
		$signData = strtoupper($signData);
		return urlencode($signData);
	}
	
	public function prepareData(){
		$rescode = $this->_response['respCode'];
		$data = [
			"booking_id" => (int)$this->_response["invoiceNo"],
			"transaction_no" =>  $this->_response["tranRef"],
			"resp_code" => "$rescode",
			"pan" => $this->_response["Pan"],
			"created_at" => $this->_response["dateTime"],
			"status" => $this->_response["Status"],
			"fail_reason" => $this->_response["failReason"],
			"amount" => $this->getAmount($this->_response["Amount"]),
		];
		
		return $data;
	}
	
	
	public function sendResponse(){
		$params = $this->getResponseHashValue();
		$curl = curl_init();
        curl_setopt($curl, CURLOPT_TIMEOUT, 3); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        
 
        curl_setopt($curl, CURLOPT_URL, $this->postUrl);
         
        // make the request
        $response = curl_exec($curl);
		
		echo "<pre>";
		print_r($response);
		exit;
	}
	
	
	public function getResponseHashValue(){
		$paymentGatewayID = $this->_response["paymentGatewayID"];
		$respCode =  $this->_response["respCode"];
		$fraudCode = $this->_response["fraudCode"];
		$Pan = $this->_response["Pan"];
		$Amount = $this->_response["Amount"];
		$invoiceNo = $this->_response["invoiceNo"];
		$tranRef =  $this->_response["tranRef"];
		$approvalCode = $this->_response["approvalCode"];
		$Eci = $this->_response["Eci"];
		$dateTime = $this->_response["dateTime"];
		$Status = $this->_response["Status"];
		
		$HashValue = $paymentGatewayID . $respCode . $fraudCode . $Pan . $Amount . $invoiceNo . $tranRef . $approvalCode . $Eci . $dateTime . $Status;
		
		$signData = hash_hmac('SHA256', $HashValue,$this->secretKey, false);
		$signData = strtoupper($signData);
		return urlencode($signData);
	}
	
	
	public function getAmount($amount){
		return ($amount / 100);
	}
	
	public static function sendAdminBookingEmail($payment){
		$subject = "Payment for ".$payment->booking->package->name;
		$message = $payment->booking->name . "has made payment for ".$payment->booking->package->name ;
		$message .= "and cost is ".$payment->booking->upFrontPrice." and payment status is ".$payment::$status[$payment->status];
		return mail("mountainsherpatrek@gmail.com", $subject, $message);
		
	}
	
	public static function sendCustomerBookingEmail($payment){
		$subject = "Payment for ".$payment->booking->package->name;
		$message = "You have made payment for ".$payment->booking->package->name ;
		$message .= "and cost is ".$payment->booking->upFrontPrice." and payment status is ".$payment::$status[$payment->status];
		return mail($payment->booking->email, $subject, $message);
		
	}
	
}

