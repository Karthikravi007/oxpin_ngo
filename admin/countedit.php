<?php
error_reporting(0);
include('header.php');
?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h4>Form Change</h4>
                    <?php
$result = $db_handle->runQuery("select * from count where id='".$_REQUEST['id']."'");
foreach($result as $row) { ?>


<form class="cmxform form-horizontal style-form" id="signupForm" action="countupdate.php"
                enctype="multipart/form-data" 
                method="post">
                
                <div class="form-group"><label for="exampleInputEmail1">Heading</label><input type="text"name="edit_heading" value="<?php echo $row['heading'];?>" required 
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter text"> </div>
                    <div class="form-group"><label for="exampleInputEmail1">Count</label><input type="text"name="edit_count" value="<?php echo $row['count'];?>" required 
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter text"> </div>
                
                    

                    <input type="hidden" name="update_id" value="<?php echo $_REQUEST['id'];?>">

                      <button type="submit" name="upload" class="btn btn-primary">Submit</button>
                     
                      
 
                    </form>
                    <?php }
                    ?>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; consultancy Website 2021</span>
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
                    <a class="btn btn-primary" href="login.php">Logout</a>
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