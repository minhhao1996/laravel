<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function postFile(Request $request)
    {
       if($request->hasFile('myFile')){
           $file = $request->file('myFile');
           $fileContr = $file->getClientOriginalExtension('myFile');
           if ($fileContr =="jpg"||$fileContr =="png"){
               $fileName = $file->getClientOriginalName('myFile');
               echo $fileName;
               $image = str_random(4).$fileName;
               while (file_exists("../img".$image)){
                   $image = str_random(4)."_".$fileName;
               }
               $file->move('img',$image);
           }
           else{
               echo"loại file không được phép" ;
           }

       }
    }
}
