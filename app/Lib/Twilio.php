<?php
namespace App\Lib;
use Twilio\Rest\Client; 
/**
 * summary
 */
class Twilio
{
 
    public static function sendMessage($to,$message){
    	try {
    		$sid 	 = env('TWILIO_ACCOUNT_SID');
	        $token = env('TWILIO_ACCOUNT_TOKEN');
	        $number = env('TWILIO_NUMBER');
    		$client = new Client($sid, $token);
			$client->messages->create( 
			    "+${to}",
			    array(
			        'from' => $number,
			        'body' => $message
			    )
			);
    	} catch (Exception $e) {
    		return response()->json(['status' => 'false', 'message' => $e->getMessage(),'data'=>[]]);
    	}
    }




}
