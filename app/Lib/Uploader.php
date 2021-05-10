<?php
namespace App\Lib;
use Illuminate\Database\Eloquent\Model;
use Image;
use Str;
use Illuminate\Support\Facades\Storage;
/**
 * 
 * 
 * This Library use for image upload and resizing.
 *  
 * 
 **/

class Uploader
{
    
    public static function doUpload($file,$path,$thumb=false,$size=200,$pre=null,$id=null){
        $response = [];
        $image = $file;
        if($id!=null){
            $file = $id.'.'.$image->getClientOriginalExtension();
        }else{
            $file = Str::limit(Str::slug(pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME)).'-'.time(),50).'.'.$file->getClientOriginalExtension(); 
            // $file = time().'.'.$image->getClientOriginalExtension();
        }
        $destinationPath = public_path().'/'.$path; 
        Image::make($image)->save($destinationPath.$file,70);
        $thumbPath = '';
        if($thumb==true){
            $thumbPath = public_path($path).'thumb/'.$file;
            if(!file_exists(public_path($path).'thumb/')) {
              mkdir(public_path($path).'thumb/', 0777, true);
            }
            $cropInfo = Image::make($image)->heighten($size)->save($thumbPath);
        }
        $response['status']     = true;
        //$response['file']       = "public".$path.$file;
        $response['file']       = ltrim($path,'/').$file;
        $response['thumb']      = "public".$path."thumb/".$file;
        $response['file_name']  = $file;
        $response['path']       = $path; 
        return $response; 
    }

    public static function fileUpload($file,$path){  
        $image = $file;
        $file = Str::limit(Str::slug(pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME)).'-'.time(),50).'.'.$file->getClientOriginalExtension(); 
        $destinationPath = public_path().$path; 
        if(!file_exists($destinationPath)) {
          mkdir($destinationPath, 0777, true);
        }
        if($uploaded = $image->move($destinationPath, $file)){
            chmod($uploaded->getRealPath(), 0777); 
            $response['status']     = true;
            $response['file']       = "public".$path.$file;
            $response['file_name']  = $file;
            $response['path']       = $path;
        }else{
            $response['status']     = false;
        }
        return $response;
    }

    public static function fileUploadBlob($file,$path){  
        $image = $file;
        $file = time().'.'.$file->getClientOriginalExtension(); 
        $destinationPath = public_path().$path; 
        if(!file_exists($destinationPath)) {
          mkdir($destinationPath, 0777, true);
        }
        if($uploaded = $image->move($destinationPath, $file)){
            chmod($uploaded->getRealPath(), 0777); 
            $response['status']     = true;
            $response['file']       = "public".$path.$file;
            $response['file_name']  = $file;
            $response['path']       = $path;
        }else{
            $response['status']     = false;
        }
        return $response;
    }
    
}
