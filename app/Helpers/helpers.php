<?php

function is_active(string $routeName){
    return null !==request()->segment(2) && request()->segment(2)==$routeName?  'active':'' ;
}
function SaveImage($photo,$folder){
    $file_extension=$photo->getClientOriginalExtension();
    $file_name=time().'.'.$file_extension;
    $path=$folder;
    $photo->move($path,$file_name);

    return $file_name;
}

//function SaveImage($photo,$folder){
//    $file_extension=$photo->getClientOriginalExtension();
//    $file_name=time().'.'.$file_extension;
//    $path=$folder;
//    $photo->move($path,$file_name);
//
//    return $path.'/'.$file_name;
//}

function viewImage($imageName,$imagePath='assets/customers_images/'){
    if($imageName==null) {
        $imageName='blank.png';
    }
    return $imagePath . $imageName;
}

function deleteOldImage($imageName,$imagePath){
    \Illuminate\Support\Facades\Storage::delete('/public/assets/'.$imagePath.'/'.$imageName);
    \Illuminate\Support\Facades\File::delete(public_path('assets/'.$imagePath.'/'.$imageName));
}
