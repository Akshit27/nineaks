<?php
namespace App\Lib; 
use Mail;
use App\Models\EmailTemplate;  
use App\Models\Setting;  
/**
 * 
 * 
 * This Library use for image upload and resizing.
 *  
 * 
 **/

class Email
{
    
    
    public static function send($template,$data,$email = null,$title=null){
        if(!$email || $email ==''){
            $email           = $data['email'];
        }  
    	$maildata = EmailTemplate::where('slug', '=', $template)->first();
    	if($maildata){ 
    		$site_email      = env('MAIL_FROM_ADDRESS');
            $site_title      = env('APP_NAME');
            $message         = str_replace(explode(",",$maildata->keywords), $data,$maildata->content);  
            $subject         = ($title==null)?$maildata->title:$title;
            
            Mail::send('email.email', array('data'=>$message), function($message) use ($site_email, $email, $subject, $site_title){ 
                $message->from($site_email, $site_title);
                $message->to($email, $email)->subject($subject);
            });
    	}
    }
    
}
