<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clinique Feline - Tableau de bord</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    @auth
    @include('partials.sidebar')
    @endauth

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
     @auth
    @include('partials.navbar')
    @endauth

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- 404 Error Text -->
           <div class="text-center">
             <div class="error mx-auto" data-text="404">404</div>
             <p class="lead text-gray-800 mb-5">Page Introuvable</p>
             <p class="text-gray-500 mb-0">Il apparaît que vous chercher le malin ... :P</p>
             @auth
             <a href="/dashboard">&larr; Retour au tableau de bord</a>
             @endauth
           </div>

</div>
      </div>
      <!-- End of Main Content -->
 @auth
  @include('partials.footer')
  @endauth

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @include('partials.logoutModal')


  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->


</body>

</html>
