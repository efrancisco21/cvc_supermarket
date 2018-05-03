
<br>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">



        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Customer accounts
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($results as $row) {
                                    ?>
                                    <tr class = "odd gradeX">
                                        <?php
                                        echo "<td>" . $row->firstname . "</td>";
                                        echo "<td>" . $row->lastname . "</td>";

                                        echo "<td>" . $row->emailad . "</td>";
                                        ;
                                        if ($row->status == 0) {
                                            echo "<td>" . "Deactivated" . "</td>";
                                        } elseif ($row->status == 1) {
                                            echo "<td>" . "Activated" . "</td>";
                                            ;
                                        }


                                        if ($row->status == 0) {
                                            ?>
                                            <td>
                                                <button type="button, submit"  class="btn btn-primary">
                                                    <a style="color: white" href="<?php echo base_url('admin/activate_users/' . $row->account_id); ?>">
                                                        <span class="glyphicon glyphicon-upload"></span> Activate
                                                </button>


                                            </td>
                                            <?php
                                        } elseif ($row->status == 1) {
                                            ?>
                                            <td>
                                                <button type="button, submit"  class="btn btn-danger">
                                                    <a style="color: white" href="<?php echo base_url('admin/deactivate_users/' . $row->account_id); ?>">
                                                        <span class="glyphicon glyphicon-upload"></span> Deactivate
                                                </button>


                                            </td>

                                            <?php
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                }
                                ?>


                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

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
