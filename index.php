<?php
    include 'config.php';

    $result="";

        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $city=$_POST['city'];
        
        $sql="INSERT INTO users(name, email, phone, city)VALUES('$name','$email','$phone','$city')";
        
        if(mysqli_query($conn,$sql)){
            $result="One Record Inserted Successfully!";
        }
        else{
//            Para conferir erro na conexão use esse codigo
//            $result="Something went wrong!".mysqli_error($conn);    
            
            $result="Something went wrong!";
        }
        
        
    }

    function test_input($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>


<!DOCTYPE html>
<!--https://www.youtube.com/watch?v=bPZjuV4EdmE&index=1&list=PL6u82dzQtlfsV_n9w_wuhPulddNosaQru-->
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="description" content="Aqui vai uma descrição do website">
        <meta name="author" content="Sahil Kumar">
        <meta name="keywords" content="website, design">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!--    STYLE CSS-->
        <link rel="stylesheet" href="css/style.css">
        
        
        <link rel="icon" href="images/fav.png">
        <title>CRUD 3</title>
    
</head>
<body class="bg-dark">
   <div class="container">
       <div class="row p-2">
           <div class="col-lg-4 offset-lg-4 bg-light text-dark mt-4 p-3 rounded">
               <h3 class="text-center p-2">Insert Data Into Database</h3>
               <hr class="bg-dark">
               <form action="" method="post">
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Name" required>
                  </div>
                      
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                                                       
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                  </div>         
                    
                    <div class="form-group mb-4">
                      <label for="city">City</label>
                      <input type="text" name="city" class="form-control" placeholder="City" required>
                    </div>    
                    
                    <div class="form-group">
                        <input type="submit" name="submit" value="insert" class="btn-primary btn-block">
                    </div>
                    
                    <div class="form-group text-center">
                        <a href="view.php" class="text-dark lead">View Records</a>
                    </div>
                       
                    <div class="form-group text-center">
                        <p class="lead"><?= $result; ?></p>
                    </div>   
                                                        
               </form>
           </div>
       </div>
   </div>
    
</body>
</html>