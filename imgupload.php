<?php
$target_dir = "";
$target_file = $target_dir.basename($_FILES["uploading"]["name"]);
$uploadOK = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo ($FileType . "<br>");
if($FileType=="jpg")
$uploadOK=1;
else{
    echo "File extension should be .jpg";
    $uploadOK=0;
}
if($uploadOK == 0){
    echo "Sorry,Your file was not  uploaded";
    // if everything id ,try to upload file . 
}
else{
if(move_uploaded_file($_FILES["uploading"]["tmp_name"],$target_file)){
    echo "the file" . htmlspecailchars(basename($_FILES["uploading"]["name"])) . "has been uploaded";
}
else{
    echo "Sorry ! their was an error in uploading file";
}
}



?>