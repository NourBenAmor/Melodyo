
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Melodyo AdminSpace</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
.hidetext { -webkit-text-security: disc; /* Default */ }
</style>
</head>

<!-- END: Head-->

<!-- BEGIN: Body-->

<body id="page-top">
		<?PHP
			include "C:\wamp64\www\Melodyo\Core\livreurC.php";
			$livreur1C=new livreurC();
			$listelivreur=$livreur1C->afficherLivreurs();

			//var_dump($listelivreur->fetchAll());
		?>
    
     <!-- Page Wrapper -->
  <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
  
    </div>
    <div class="sidebar-brand-text mx-3">Melodyo AdminSpace</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider  mb-0 mt-2">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="todolist.php">
      <i class="fas fa-fw fa-list-alt"></i>
      <span>To Do List</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Tasks
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-plus"></i>
      <span>ADD</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">NEW:</h6>
        <a class="collapse-item" href="form-ajoutLivraison.php">Livraison</a>
        <a class="collapse-item" href="form-ajoutLivreur.html">Livreur</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-table"></i>
      <span>Listes</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Les differents elements:</h6>
        <a class="collapse-item" href="afficherLivr.php">Liste Des Livraisons</a>
        <a class="collapse-item" href="afficherLivreur.php">Liste Des Livreurs</a>
      </div>
    </div>

  </li>

  <!-- Divider -->
  <hr class="sidebar-divider mb-0 mt-2">
 <!-- Nav Item - Dashboard -->
 <li class="nav-item">
    <a class="nav-link" href="login.php">
      <i class="fas fa-fw fa-user"></i>
      <span>Logout</span></a>
  </li>


 

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  
<!-- Main Content -->
<div id="content">
  <!-- Main Content -->
  <div id="content">

        
    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    
      <!-- DataTales Example -->
      <div class="card shadow-lg h-75 m-4 mt-8">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-success">Liste Livreurs</h6>

        </div>
        <div class="card-body">
          <div class="table-responsive">
<script>
function printPage() {
  window.print();
}
</script>
          <a style="float: right;color: white;"onclick="printPage()" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>

                      <th>Id Livreur</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Salaire</th>
                      <th>Email</th>
                      <th>Mot de Passe</th>
                      <th>Actions</th>
        </tr>
    </thead>
            
    <br>
    <br>

<?PHP
foreach($listelivreur as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_livreur']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['salaire']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td class="hidetext"><?PHP echo $row['mdp']; ?></td>
	
    <td>
                            <a href="ModifierLivreur.php?id_livreur=<?php echo $row['id_livreur']; ?>" class="btn btn-info btn-icon-split">
                              <span class="icon text-white-50">
                                <i class="fas fa-fw fa-wrench"></i>
                              </span>
                              
                            </a>
                          
                          
                          <a onClick="deleteme(<?php echo $row['id_livreur']; ?>)" class="btn btn-danger btn-icon-split">
                          <span class="icon text-white-50">
                              <i class="fas fa-trash"></i>
                            </span>
                            
                          </a>
<script language="javascript">
function deleteme(delid)
{
if(confirm("Do you really want to delete this?")){
window.location.href='supprimerLivreur.php?id_livreur=' +delid+'';
return true;
}
} 
</script>
                          </td>
                        </tr>
                        <?php
                      }  
                    ?>
                 </thead>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        <!-- /.container-fluid -->

      </div>

      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Melodyo 2020</span>

          </div>
        </div>

      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-success" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
