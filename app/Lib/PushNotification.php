<?php
namespace App\Lib;
use App\Models\UserDevices;

class PushNotification  {

    public $live = false;
    

    public static  function sendFcmNotify($user_devices, $message, $dictionary = '', $type = '',$title)
    { 
        $url = 'https://fcm.googleapis.com/fcm/send'; 
        $server_key = 'AAAA4v78Q3g:APA91bGiZ5lCM-bJSemuX89__-YmRDqnCf_kgFAJaAPVEjlIpkM01lxhQyrkFoOv3wrcDaEkE9zHCw-beD4Sf53Iu6OGYTL081q0wu2PSlMGxR3JEVUXgfePa0pg4UrVLyeIVwW2upL0';

        $ttl = 86400;
        // $randomNum = rand(10, 100);
        $fields = array
        (
            'priority'             => "high", 
            'notification'         => array( "title"=>$title,"message"=>$message, "body" =>$message,'sound' => 'default','type'=>$type,'dictionary' => $dictionary),
        ); 
                
        $fields['registration_ids'] = $user_devices;
        
     
        $headers = array(
            'Content-Type:application/json',
            'Authorization:key='.$server_key
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);
        // echo json_encode($result);
        /*if ($result === FALSE) {
           die('Problem occurred: ' . curl_error($ch));
        }*/
    }

    public static function Notify($user,$message,$type="",$dic=[],$title){ 
        $UserDevices = UserDevices::where([["user_id",'=',$user],['device_token','!=','SIMULATOR']])->pluck('device_token')->toArray(); 
        if(count($UserDevices)>0){
            PushNotification::sendFcmNotify($UserDevices, $message,$dic,$type,$title);
        }
    } 
   
}

?>