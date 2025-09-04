<?php
$file_root= __FILE__;
$doc_root = str_replace("\\", "/", $file_root);
//echo $doc_root."<br>";
$server_root= $_SERVER['DOCUMENT_ROOT'] ;
$web_root = str_replace(array($server_root, 'eCommerce/structure/template.php'),'',$doc_root);
//echo $web_root;
define('WEB_ROOT', $web_root);
if(!defined('WEB_ROOT')){
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?= $pageTitle ?></title>
    <base href="<?= WEB_ROOT ?>">
  
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/css/demo/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <link href="assets/css/demo/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="assets/css/demo/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="assets/fontawesome/css/all.min.css" rel="stylesheet">
</head>
<body>
<script src="assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <?php include 'nav.php';?>
    <div class="main-wrapper mdc-drawer-app-content">
      <?php include 'header.php';?>
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
                <main class="content-wrapper">
                  <?php require "$pageContent";?>
                </main>
        <?php include 'footer.php';?>
      </div>
    </div>
  </div>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/chartjs/Chart.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/js/material.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/jquery-3.6.4.min.js"></script>
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/sweetalert.js"></script>
  <script src="assets/js/custom.js"></script>
   <?php include 'modal.php';?>
</body>
</html> 

