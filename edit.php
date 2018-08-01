<?php
    include 'config.php';
    $id=$_GET['id'];
    $result=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
    $row=mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<!--Parei AQUI-->
<!--https://www.youtube.com/watch?v=C_hNQP8Lh64&list=PL6u82dzQtlfsV_n9w_wuhPulddNosaQru&index=5-->
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
               <h3 class="text-center p-2">Edit & Save In Database</h3>
               <hr class="bg-dark">
               <form action="" method="post">
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" value="<?=row['name']; $?>" required>
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
                        <input type="submit" name="submit" value="Update" class="btn-primary btn-block">
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