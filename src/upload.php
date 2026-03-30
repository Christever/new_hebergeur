<?php
$image = $_FILES["image"];
$name = $_FILES["image"]["name"];
$temp_name = $_FILES["image"]["tmp_name"];
$error = $_FILES["image"]["error"];
$size = $_FILES["image"]["size"];

if (isset($image) and $error === 0) {
    if ($size <= 6000000) {
        $info = pathinfo($name);
        $extension = strtolower($info["extension"]);
        $extension_array = ["jpg", "jpeg", "png", "gif"];
        
        // verif si extension autorisée
        if (in_array($extension, $extension_array)) {
            $target_dir = __DIR__ . "/../public/uploads/";
            $target_name = time().rand().rand().".".$extension;
            move_uploaded_file($temp_name, $target_dir.$target_name);
        }
        else {
            echo "Extension non autorisée";
        }

    }
    else {
        echo "erreur image trop lourde";
    }
}
