<?php

if(isset($_FILES['image'])) {
    // UPLOADED FILE DATA
    $file_name = $_FILES['image']['name']; // image.jpg ["image", "jpg"]
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_name_exploded = explode('.', $file_name);
    $array_counter = array_key_last($file_name_exploded);
    $file_ext = $file_name_exploded[$array_counter];

    $accepted_extensions = ['jpg', 'png', 'gif', 'jpeg'];

    // CHECK FILE EXTENSION
    if(!in_array($file_ext, $accepted_extensions)) {
        die("Hay you are trying to hack our website");
    }

    // CHECK FILE SIZE IS BIGGER THAN 2 MBS
    if($file_size > 2097152) {
        die("Your file size is too large");
    }

    $rand_number = uniqid();

    move_uploaded_file($file_tmp, "uploads/".$rand_number.$file_name);
    echo "Okay your file is uploaded successfully!";
}