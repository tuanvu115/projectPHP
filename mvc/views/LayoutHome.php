<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tin Tức</title>

  <!-- Bootstrap core CSS -->
  
    
 <link rel="stylesheet" href="./public/web/vendor/bootstrap/css/bootstrap.min.css" />
  <!-- Custom styles for this template -->
  

</head>

<body>

  <?php
      require_once "./mvc/include/web/header.php";
   ?>

  
  <div class="container">

   <?php
      require_once "./mvc/views/pages/web/".$data["Page"].".php";
   ?>

  </div>
  
  
  <?php
      require_once "./mvc/include/web/footer.php";
   ?>

  <!-- Bootstrap core JavaScript -->
  <script src="./public/web/vendor/jquery/jquery.min.js"></script>
  <script src="./public/web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
