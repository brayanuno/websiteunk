<?php
if(isset($_POST['submit'])) {
    require 'newsletter.php';
    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $last =  mysqli_real_escape_string($conn,$_POST['last']);
    $hotmail =  mysqli_real_escape_string($conn,$_POST['hotmail']);
    $country =   mysqli_real_escape_string($conn,$_POST['country']);
    $message =  mysqli_real_escape_string($conn,$_POST['message']);
    // $sql = "INSERT INTO newsletter (firstName,lastName,date,hotmail) VALUES ('$first','$last','2018-11-14 17:38:02','$hotmail')";
    if(empty($first) || empty($last) || empty($hotmail) || empty($country)) {
        header("Location: ../suscribedSuccess.php?error=emptyfields"); 
        exit();     
    }
    else if(!filter_var($hotmail,FILTER_VALIDATE_EMAIL)) {
         header("location: ../suscribete.php?error=invalidmail");
         exit();
        
    }
    //cheching sql to not duplicate hotmail
    else {
        $sql = "SELECT hotmail FROM suscribe WHERE hotmail=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../suscribete.php?error=hotmailalreadyexist");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s",$hotmail);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) { 
                header("Location: ../suscribete.php?error=hotmailalreadyexist" );
                exit();
                
            }
            else{
                $sql = "INSERT INTO suscribe (firstName,lastName,hotmail,country,message) VALUES (?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../suscribete.php.php?error=sqlerror"); 
                    exit();
                }
                else {  
                    mysqli_stmt_bind_param($stmt, "sssss", $first,$last,$hotmail,$country,$message);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../juego.php?suscribed=success");
                    exit();
                }
            }
        }
        
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    exit();
    }
else {
    header("Location: ../index.php");
    exit();
}
?>