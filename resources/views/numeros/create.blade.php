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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../css/bootstrap-datepicker.min.css" rel="stylesheet"/>




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

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <div class="card mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Ajouter un numéro</h6>
                </div>
                <div class=card-body>
                  <!-- Pour les messages de succès --->
                  @include('flash::message')
                  <!--- --->
              <form method="post" action="{{ route('numeros.store') }}">
                @csrf
                <!-- Propriétaire du numéro -->
                 <div class="form-group w-50">
                     <label for="proprietaire">Propriétaire :</label>
                     <input type="text" class="form-control" id="proprietaire" name="proprietaire" aria-describedby="nameHelp" placeholder="le propriétaire du téléphone" value="{{ old('proprietaire')}}" >
                     <small id="nameHelp" class="form-text text-muted">à qui appartient le numéro</small>
                 </div>
                 @if($errors->has('proprietaire'))
                 <div class="alert alert-danger w-50" role="alert">
                   {{ $errors->first('proprietaire') }}
                 </div>
                 @endif
               <!-- Numéro de téléphone -->
                <div class="form-group w-50">
                    <label for="name">Le numéro :</label>
                    <input type="text" class="form-control" id="numero" name="numero" aria-describedby="nameHelp" placeholder="Le numéro de téléphone" value="{{ old('numero')}}">
                    </div>
                @if($errors->has('numero'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('numero') }}
                </div>
                @endif

            <button type="submit" class="btn btn-primary">Ajouter</button>
             </form>
           </div>
             </div>






            </div>
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
  <script src="../vendor/jquery/jquery.min.js"></script>



  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>



</body>

</html>
