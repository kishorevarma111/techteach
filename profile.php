<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <?php include "title.php"?>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- this is the sample comment -->
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>


  <body>

    <!-- Navigation -->
    <?php include "profilenavigation.php" ?>
<!-- this is the corosoul -->


    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Welcome TechTeach < username ></h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="index.php">Home</a>
   </li>
   <li class="breadcrumb-item active">profile</li>
 </ol>
 <div class="row">
   <div class="col-lg-6">
     <h2><?php echo $_SESSION['givenName'].$_SESSION['familyName'] ?></h2>

     <ul>
       <li>
         <strong><?php echo $_SESSION['id'] ?></strong>
       </li>
       <li><?php echo $_SESSION['givenName']," ".$_SESSION['familyName'] ?></li>
       <li><strong><?php echo $_SESSION['email'] ?></strong></li>
      

     </ul>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
   </div>
   <div class="col-lg-6">
  <img class="image-responsive image-circle"  src="<?php echo $_SESSION['picture'] ?>"><br>
  <button class="btn-success" name="changepic">Change Profile picture</button>
   </div>

 </div>









    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
