<?php 
    include 'config.php';
    $id=$_GET['id'];

    $sql="DELETE FROM users WHERE id='$id'";
    if(mysqli_query($conn,$sql)){
        header("location:view.php");
    }
    else{
        echo"Somenthig went wrong!";
    }
?>
