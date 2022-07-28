<?php
if(isset($_POST['submit']) && isset($_FILES['file'])){

    include "db_conn.php";




    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

    $fileExt= explode('.',$fileName);
    $fileActualExt= strtolower(end($fileExt));

    $img_ex = pathinfo($fileName, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);

    $allowed = array('jpg','jpeg','png','pdf');
    
    if(in_array($img_ex_lc,$allowed)){
        if($fileError===0) {
            if($fileSize<1000000){
                $fileNameNew=uniqid('IMAGE-', true).".".$img_ex_lc;
                $fileDestination='uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location:index.php?uploadsuccess");

                // Insert into Database
				$sql = "INSERT INTO images(image_url) 
                VALUES('$fileNameNew')";
                mysqli_query($conn, $sql);
                header("Location: view.php");






            }else {
                echo "your file size is big";
            }
        }else{
        echo"There was an error!";
        }


}else{
    echo"You cannot upload files of this type!";
}

}

