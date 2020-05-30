<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LoginwebController extends Controller
{
    public function save_image($model, $file){
        Storage::makeDirectory("/public/$model/".date('F').date('Y'));
        try{
            $base_name =  Str::random(20);
            // imagen normal
            $filename = $base_name.'.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->orientate();
            $image_resize->resize(1024, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $path =  "$model/".date('F').date('Y').'/'.$filename;
            $image_resize->save(public_path('../storage/app/public/'.$path));

            // imagen mediana
            $filename_medium = $base_name.'_medium.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->orientate();
            $image_resize->resize(512, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $path_medium = "$model/".date('F').date('Y').'/'.$filename_medium;
            $image_resize->save(public_path('../storage/app/public/'.$path_medium));

            // imagen pequeña
            $filename_small = $base_name.'_small.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->orientate();
            $image_resize->resize(128, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $path_small = "$model/".date('F').date('Y').'/'.$filename_small;
            $image_resize->save(public_path('../storage/app/public/'.$path_small));

            // imagen facebook
            $filename_fb = $base_name.'_facebook.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath())->orientate();
            $image_resize->resizeCanvas(1000, 523);
            $path_fb =  "$model/".date('F').date('Y').'/'.$filename_fb;
            $image_resize->save(public_path('../storage/app/public/'.$path_fb));
            
            return $path;

        }catch (\Throwable $th) {
            return null;
        }
    }

    public static function userAgent(){
        $miuseragent=$_SERVER['HTTP_USER_AGENT'];
        $moviles=array("Mobile","iPhone","iPod","BlackBerry","Opera Mini","Sony","MOT","Nokia","samsung");
        $detector=0;
        $numMoviles=count($moviles);
        for ($i=0;$i<$numMoviles;$i++) {
            $comprobar=strpos($miuseragent,$moviles[$i]);
            if ($comprobar!="") {
                $detector=1;
            }
        }
        if ($detector==1) {
            return 'movil';
        }else{
            return 'pc';
        }
    }
}
