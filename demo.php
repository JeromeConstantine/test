<?php
$folder_name = 'upload/';
include "config.php";
if(!empty($_FILES))
{
 $temp_file = $_FILES['file']['tmp_name'];
 $fileData = pathinfo(basename($_FILES["file"]["name"]));
 $fileName = uniqid() . '.' . $fileData['extension'];
 $target_path = ( $folder_name."/" . $fileName);
 if(move_uploaded_file($temp_file, $target_path)){
    echo $fileName;
 }
}
// else { 
//    $result  = array();
//    $files = scandir($folder_name);                 //1
//    if ( false!==$files ) {
//        foreach ( $files as $file ) {
//            if ( '.'!=$file && '..'!=$file) {       //2
//                $obj['name'] = $file;
//                $obj['size'] = filesize($folder_name.$ds.$file);
//                $result[] = $obj;
//            }
//        }
//    }
//    header('Content-type: text/json');              //3
//    header('Content-type: application/json');
//    echo json_encode($result);
// }
?>