
<!-- Page Content -->
<div id="page-wrapper">
    <br>
    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Category list
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($results as $rows) {
                                        ?>
                                        <tr class = "odd gradeX">
                                            <?php
                                            echo "<td>" . $rows->Category_name . "</td>";
                                            ?>
                                            <td>
                                                <button type="button, submit"  class="btn btn-danger">
                                                    <a style="color: white" href="<?php echo base_url('admin/delete_category/' . $rows->Category_ID); ?>">
                                                        <span class="glyphicon glyphicon-upload"></span> Delete
                                                </button>


                                            </td>
                                            <?php
                                            ?>

                                        </tr>
                                        <?php
                                    }
                                    ?>



                                </tbody>
                            </table>
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /#page-wrapper -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
