<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title><?= $title; ?> - Admin Bootstrap Template</title>
      <meta name="robots" content="noindex, nofollow">
      <meta content="" name="description">
      <meta content="" name="keywords">
      <link href="img/favicon.png" rel="icon">
      <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-icons.css" rel="stylesheet">
      <link href="css/boxicons.min.css" rel="stylesheet">
      <link href="css/quill.snow.css" rel="stylesheet">
      <link href="css/quill.bubble.css" rel="stylesheet">
      <link href="css/remixicon.css" rel="stylesheet">
      <link href="css/simple-datatables.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
   </head>
  
   <body>

     <?= $this->include('layout/navbar');  ?>

     <?= $this->include('layout/sidebar');  ?>
     
<?= $this->renderSection('content');  ?>

     
<footer id="footer" class="footer">
         <div class="copyright"> &copy; Copyright <strong><span>Compnay Name</span></strong>. All Rights Reserved</div>
         <div class="credits"> with love <a href="https://freeetemplates.com/">FreeeTemplates</a></div>
      </footer>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>  
        <script src="js/apexcharts.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/echarts.min.js"></script>
        <script src="js/quill.min.js"></script>
        <script src="js/simple-datatables.js"></script>
        <script src="js/tinymce.min.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/main.js"></script> 
             
   </body>
</html>