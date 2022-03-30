<?php
    // function RandomString()
    // {
    //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //     $randstring = '';
    //     for ($i = 0; $i < 10; $i++) {
    //         $randstring = $characters[rand(0, strlen($characters))];
    //     }
    //     return $randstring;
    // }

    // RandomString();
    // echo $randstring;

//     function generateRandomString($length = 10) {
//         $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//         $charactersLength = strlen($characters);
//         $randomString = '';
//         for ($i = 0; $i < $length; $i++) {
//             $randomString .= $characters[rand(0, $charactersLength - 1)];
//         }
//         return $randomString;
//     }
//     // Echo the random string.
// // Optionally, you can give it a desired string length.
//     echo generateRandomString();


// Include the database configuration file

include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]).$fileid;
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$fileid = "SELECT * FROM images WHERE id = :id "

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "L'image ".$fileName. " à été upload correctement.";
            }else{
                $statusMsg = "L'upload de l'image à échoué, merci de réesssayez.";
            } 
        }else{
            $statusMsg = "Malheureusement, il y a eu une erreur lors de l'upload de l'image.";
        }
    }else{
        $statusMsg = 'Désolé, seul les formats suivents sont autorisés : JPG, JPEG, PNG, GIF et PDF.';
    }
}else{
    $statusMsg = 'Merci de choisir un fichier à upload.';
}

// Display status message
echo $statusMsg;

    


    //ou ça 
    //md5($filename)
    //fe6dbefca221b544567d82f830fb9a1e