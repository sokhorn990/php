<?php
if(isset($_POST["submit"])){
    $to="img/".$_FILES["profile"]["name"];
    if(move_uploaded_file($_FILES["profile"]["tmp_name"],$to)){
        echo"<img src =$to>";
    }
}else{
    echo"Can not upload file try again";
} 
