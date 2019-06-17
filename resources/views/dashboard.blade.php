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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('partials.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

    @include('partials.navbar')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
             </div>




            <div class="row">
              <div class="col-xl-12 col-md-8 mb-4">
              <div class="card shadow mb-4">
               <div class="card-header py-3">
                 <h6 class="m-0 font-weight-bold  text-primary">Clinique Feline</h6>
               </div>
               <div class="card-body">
                 <blockquote class="blockquote">
                   @auth
                   <p class="mb-0">Bienvenue une autre fois {{ auth()->user()->name }} ! </p>
                   @endauth
                   </blockquote>

                   <a href="/profile" class="btn btn-success btn-icon-split btn-lg">
                           <span class="icon text-white-50 lg">
                             <i class="fas fa-user-md"></i>
                           </span>
                           <span class="text">Profil de l'administrateur</span>
                         </a>



                       

               </div>
             </div>
           </div>
          </div>



          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-6 col-md-8 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                              <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nombre total des patients</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $patientsnumber }}</div>
                                  </div>
                                  <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>
                <div class="col-xl-6 col-md-8 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dernier patient enregistré</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $lastpatient->nom_complet }}</div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-laptop-medical fa-2x text-gray-300"></i>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
               </div>




          </div>

                      <div class="row">


                    </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      @include('partials.footer')

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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
