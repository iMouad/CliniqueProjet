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
  <link href="css/bootstrap-datepicker.min.css" rel="stylesheet"/>




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
             <a href="/add-admin" class="btn btn-primary btn-icon-split" style="margin-bottom:10px;">
                                 <span class="icon text-white-50">
                                   <i class="fas fa-plus"></i>
                                 </span>
                                 <span class="text">Nouveau Administrateur</span>
                               </a><br>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <div class="card mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Modifier le profil de l'administrateur</h6>
                </div>
                <div class=card-body>
                  <!-- Pour les messages de succès --->
                  @include('flash::message')
                  <!--- --->
              <form method="post" action="edit">
                @csrf
                @method('PATCH')
                <!-- Username de l'admin -->
                 <div class="form-group w-50">
                     <label for="username">Username :</label>
                     <input type="text" class="form-control" id="username" name="username" aria-describedby="nameHelp" placeholder="L'username de l'administrateur" value="{{ $user->username }}" >
                     <small id="nameHelp" class="form-text text-muted">l'username sert à se connecter à l'application</small>
                 </div>
                 @if($errors->has('username'))
                 <div class="alert alert-danger w-50" role="alert">
                   {{ $errors->first('username') }}
                 </div>
                 @endif
               <!-- Nom de l'admin -->
                <div class="form-group w-50">
                    <label for="name">Le nom de l'administrateur :</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Le nom complet de l'administrateur" value="{{ $user->name }}">
                    <small id="nameHelp" class="form-text text-muted">Veuillez entrez le nom et le prénom de l'administrateur</small>
                </div>
                @if($errors->has('name'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('name') }}
                </div>
                @endif
                 <!-- email de l'admin -->
                <div class="form-group w-50">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="l'email de l'administrateur" value="{{ $user->email }}">
                </div>
                @if($errors->has('email'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('email') }}
                </div>
                @endif
                <!-- mot de passe de l'admin -->
                <div class="form-group w-50">
                    <label for="password">Nouveau mot de passe :</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrez un nouveau mot de passe" value="">
                    <small id="nameHelp" class="form-text text-muted">Si vous ne voulez pas changer de mot de passe veuillez juste entrez l'ancien mot de passe et le confirmer</small>
                </div>
                @if($errors->has('password'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('password') }}
                </div>
                @endif
                <!-- confirmation du mot de passe de l'admin -->
                <div class="form-group w-50">
                    <label for="mdpAdminconfirmation">Confirmation du mot de passe :</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmer le nouveau mot de passe" value="">
                </div>
                @if($errors->has('password_confirmation'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('password_confirmation') }}
                </div>
                @endif

            <button type="submit" class="btn btn-primary">Modifier</button>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/bootstrap-datepicker.min.js"></script>
  <script src="vendor/jquery/bootstrap-datepicker.fr.js"></script>
    <script type="text/javascript">
    $('#datepicker').datepicker({
        language :"fr",
        format : "yyyy/mm/dd",
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        defaultViewDate : "today",
    });
    $('#datepicker').datepicker("setDate", new Date());
    $('#datepicker2').datepicker({
        language :"fr",
        format : "yyyy/mm/dd",
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        defaultViewDate : "today",

    });
    $('#datepicker3').datepicker({
        language :"fr",
        format : "yyyy/mm/dd",
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        defaultViewDate : "today",

    });

    </script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>



</body>

</html>
