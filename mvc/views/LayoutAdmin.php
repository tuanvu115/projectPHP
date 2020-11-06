<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Quản trị</title>

  <!-- Custom fonts for this template-->
  <link href="./public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="./public/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="./public/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php require_once "./mvc/include/admin/header.php" ?>

  <?php require_once "./mvc/include/admin/menu.php" ?>



    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        

       <?php require_once "./mvc/views/pages/admin/".$data["Page"].".php" ?> 

       

      </div>
      <!-- /.container-fluid -->

     <?php require_once "./mvc/include/admin/footer.php" ?>

  <!-- Bootstrap core JavaScript-->
  <script src="./public/admin/vendor/jquery/jquery.min.js"></script>
  <script src="./public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="./public/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="./public/admin/vendor/chart.js/Chart.min.js"></script>
  <script src="./public/admin/vendor/datatables/jquery.dataTables.js"></script>
  <script src="./public/admin/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="./public/admin/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="./public/admin/js/demo/datatables-demo.js"></script>
  <script src="./public/admin/js/demo/chart-area-demo.js"></script>

</body>

</html>
