<?php
error_reporting(0);
include('header.php');
if($_GET['delete']) { 

    $id = $_GET['delete'];
  
   $res = $db_handle->runQuery("DELETE FROM menu WHERE id=$id");
  
  
   echo '<script>alert(" Deleted successfully"); 
   window.location.href="menu.php";</script>';
  
   }
?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Home</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                            <a href="menuadd.php"><button type="button" class="btn btn-primary" style="float: right; width: 10%;">
                                Add
                              </button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Menu</th>
                                            <th>Menu Link</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>  
                                            <th>Id</th>
                                            <th>Menu</th>
                                            <th>Menu Link</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
$result = $db_handle->runQuery("select * from menu ");
foreach($result as $row) { ?>
                    
                    <td ><?php echo $row['id'];?></td>

                    <td ><?php echo $row['menu'];?></td>

                    <td ><?php echo $row['link'];?></td>
					
                    <td>
                      <a href="menuedit.php?id=<?php echo $row['id']; ?>"> <button class="btn btn-success btn-xs"><i class="fas fa-pencil-alt"></i></button></a>
                      <a href="?delete=<?php echo $row['id'];?>">
                       <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
                      
                    </td>
                  </tr>
<?php } ?>
                                        </tbody>
                                </table>
                            </div>
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
                        <span>Copyright &copy; ngo Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            <!--modal-->
            
              
            <!--modal end-->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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