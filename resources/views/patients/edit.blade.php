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
  <link href="../../css/bootstrap-datepicker.min.css" rel="stylesheet"/>




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
                  <h6 class="m-0 font-weight-bold text-primary">Dossier du patient</h6>
                </div>
                <div class=card-body>
                  <!-- Pour les messages de succès --->
                  @include('flash::message')
                  <!--- --->
              <form method="post" action="{{ route('patient.update',$patient->id) }}">
                @method('PATCH')
                @csrf
               <!-- Nom Complet du patient -->
                <div class="form-group w-50">
                    <label for="NomComplet">Nom Complet :</label>
                    <input type="text" class="form-control" id="NomComplet" name="NomComplet" aria-describedby="nameHelp" placeholder="Le nom complet du patient" value="{{ $patient->nom_complet }}">
                    <small id="nameHelp" class="form-text text-muted">Veuillez entrez le nom et le prénom du patient</small>
                </div>
                @if($errors->has('NomComplet'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('NomComplet') }}
                </div>
                @endif
                 <!-- Tel du patient -->
                <div class="form-group w-50">
                    <label for="tel">Téléphone :</label>
                    <input type="text" class="form-control" id="tel" name="tel" placeholder="Le numéro de téléphone du patient" value="{{ $patient->tel }}">
                </div>
                @if($errors->has('tel'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('tel') }}
                </div>
                @endif
                <!-- CIN du patient -->
                <div class="form-group w-50">
                    <label for="cin">CIN :</label>
                    <input type="text" class="form-control" id="cin" name="cin" placeholder="Code d'identité nationale" value="{{ $patient->cin }}">
                </div>
                @if($errors->has('cin'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('cin') }}
                </div>
                @endif
                <!-- Date de naissance du patient -->
                <div class="form-group w-50">
                    <label for="birthday">Date de naissance :</label>
                    <input class="form-control"  name="birthday" id="datepicker3" value="{{ $patient->birthday }}">
                </div>
                @if($errors->has('birthday'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('birthday') }}
                </div>
                @endif
                <!-- Adresse du patient -->
                <div class="form-group w-50">
                    <label for="adresse">Adresse :</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse du patient" value="{{ $patient->adress }}">
                </div>
                @if($errors->has('adresse'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('adresse') }}
                </div>
                @endif
                <!-- Organisme d'assurance -->
                <div class="form-group w-50">
                  <label for="organisme">Organisme d'assurance maladie :</label>
                  <select class="form-control" name="organisme" id="organisme"  >
                    @if($patient->organisme)
                       <option value="{{ $patient->organisme }}" selected>{{ $patient->organisme }}</option>
                    @endif
                     <option value="CNSS">CNSS</option>
                     <option value="CNOPS">CNOPS</option>
                     <option value="ANAM">ANAM</option>
                     <option value="RAMED">RAMED</option>
                     <option value="FAR">FAR</option>
                     <option value="RIEN">Rien</option>

                  </select>
                </div>
                @if($errors->has('organisme'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('organisme') }}
                </div>
                @endif

                <!-- Date de contrôle -->
                <div class="form-group w-50">
                    <label for="datepicker2">Date du dernier contrôle :</label>
                    <input class="form-control" name="datecontrole" id="datepicker2" value="{{ $patient->datecontrole }}" >
                </div>
                @if($errors->has('datecontrole'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('datecontrole') }}
                </div>
                @endif

                <!-- Echographie rénale -->
                <div class="form-group w-50">
                    <label for="echographie">Echographie rénale :</label>
                    <textarea  class="form-control" id="echographie" name="echographie" >{{ $patient->echographie_renale }}</textarea>
                </div>
                @if($errors->has('echographie'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('echographie') }}
                </div>
                @endif

                <!-- CAT -->
                <div class="form-group w-50">
                    <label for="cat">CAT :</label>
                    <textarea  class="form-control" id="cat" name="cat" >{{ $patient->cat }}</textarea>
                </div>
                @if($errors->has('cat'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('cat') }}
                </div>
                @endif

                <!-- Traitement -->
                <div class="form-group w-50">
                    <label for="traitement">Traitement :</label>
                    <textarea  class="form-control" id="traitement" name="traitement" >{{ $patient->traitement }}</textarea>
                </div>
                @if($errors->has('traitement'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('traitement') }}
                </div>
                @endif

                <!-- Bilan -->
                <div class="form-group w-50">
                    <label for="traitement">Bilan :</label>
                    <textarea  class="form-control" id="bilan" name="bilan"  row="20">{{ $patient->bilan }}</textarea>
                </div>
                @if($errors->has('bilan'))
                <div class="alert alert-danger w-50" role="alert">
                  {{ $errors->first('bilan') }}
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
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/jquery/bootstrap-datepicker.min.js"></script>
  <script src="../../vendor/jquery/bootstrap-datepicker.fr.js"></script>
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
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>



</body>

</html>
