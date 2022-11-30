<?php
error_reporting(0);
include('header.php');

?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Home About</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                            <!-- <a href="mini_add.php"><button type="button" class="btn btn-primary" style="float: right; width: 10%;">
                                Add
                              </button></a> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Exprience</th>
                                            <th>Heading</th>
                                            <th>Discription</th>
                                            <th>Subheading1</th>
                                            <th>Description1</th>
                                            <th>Subheading2</th>
                                            <th>Description2</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>  
                                            <th>Id</th>
                                            <th>Exprience</th>
                                            <th>Heading</th>
                                            <th>Discription</th>
                                            <th>Subheading1</th>
                                            <th>Description1</th>
                                            <th>Subheading2</th>
                                            <th>Description2</th>
                                            <th>Image</th>
                                            <th>Action</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
$result = $db_handle->runQuery("select * from mini_about ");
foreach($result as $row) { ?>
                    
                    <td ><?php echo $row['id'];?></td>

                    <td ><?php echo $row['exprience'];?></td>

                    <td ><?php echo $row['heading'];?></td>

                    <td ><?php echo $row['description'];?></td>

                    <td ><?php echo $row['subheading1'];?></td>

                    <td ><?php echo $row['description1'];?></td>

                    <td ><?php echo $row['subheading2'];?></td>

                    <td ><?php echo $row['description2'];?></td>

                    <td><img src="<?php echo $row['image'];?>"style="width:80px;height:80px;"> </td>
					
                    <td>
                      <a href="mini_edit.php?id=<?php echo $row['id']; ?>"> <button class="btn btn-success btn-xs"><i class="fas fa-pencil-alt"></i></button></a>
                      
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
                        <span>Copyright &copy; consultancy Website 2021</span>
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