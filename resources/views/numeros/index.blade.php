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

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
             <a href="/numeros/create" class="btn btn-primary btn-icon-split" style="margin-bottom:10px;">
                                 <span class="icon text-white-50">
                                   <i class="fas fa-plus"></i>
                                 </span>
                                 <span class="text">Nouveau Numéro</span>
                               </a><br>
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">


              <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Liste des numéros enregistrés</h6>
    </div>
    <div class="card-body">

      <!-- Pour les messages de succès --->
      @include('flash::message')
      <!--- --->

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Propriétaire</th>
              <th>Numéro</th>
              <th>Date d'ajout</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Propriétaire</th>
              <th>Numéro</th>
              <th>Date d'ajout</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>

            @foreach($numeros as $numero)
            <tr>
              <td>{{ $numero->proprietaire }}</td>
              <td>{{ $numero->numero }}</td>
              <td>{{ $numero->created_at }}</td>
              <td>
                <form action="{{ route('numeros.destroy',$numero->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                <button id="delete" class="btn btn-danger btn-circle btn-sm" alt="Supprimer">
                    <i class="fas fa-trash-alt"></i>
                </button>

                <a href="{{ route('numeros.edit',$numero->id)}}"  class="btn btn-info btn-circle btn-sm" alt="Modifier">
                      <i class="fas fa-folder"></i>
                </a>
                </form>

              </td>
            </tr>
            @endforeach


          </tbody>
        </table>
      </div>
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

  <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script>
    $(document).ready(function() {
           $('#dataTable').DataTable( {
               "language": {
                 "sEmptyTable":     "Aucune donnée disponible dans le tableau",
                 "sInfo":           "Affichage du numéro _START_ à _END_ sur _TOTAL_ numéros",
                 "sInfoEmpty":      "Affichage du numéro 0 à 0 sur 0 numéros",
                 "sInfoFiltered":   "(filtré à partir de _MAX_ numéros au total)",
                 "sInfoPostFix":    "",
                 "sInfoThousands":  ",",
                 "sLengthMenu":     "Afficher _MENU_ numéros",
                 "sLoadingRecords": "Chargement...",
                 "sProcessing":     "Traitement...",
                 "sSearch":         "Rechercher :",
                 "sZeroRecords":    "Aucun numéro correspondant trouvé",
                 "oPaginate": {
                   "sFirst":    "Premier",
                   "sLast":     "Dernier",
                   "sNext":     "Suivant",
                   "sPrevious": "Précédent"
                  },
                 "oAria": {
                   "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                   "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
                  },
                 "select": {
                   "rows": {
                      "_": "%d lignes sélectionnées",
                      "0": "Aucune ligne sélectionnée",
                      "1": "1 ligne sélectionnée"
                      }
                   }
               }
           } );
       } );

    </script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
