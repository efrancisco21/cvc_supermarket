

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
                <button type="button, submit"  class="btn btn-primary">
                    <a style="color: white" href="<?php echo base_url('admin/view_about/'); ?>">
                        <span class="glyphicon glyphicon-upload"></span> Update about page
                    </a>
                </button>

                <button type="button, submit"  class="btn btn-primary">
                    <a style="color: white" href="<?php echo base_url('admin/view_home/'); ?>">
                        <span class="glyphicon glyphicon-upload"></span> Update home page
                    </a>
                </button>

                <button type="button, submit"  class="btn btn-primary">
                    <a style="color: white" href="<?php echo base_url('admin/view_contact/'); ?>">
                        <span class="glyphicon glyphicon-upload"></span>  Update contact page
                    </a>
                </button>


                <button type="button, submit"  class="btn btn-primary">
                    <a style="color: white" href="<?php echo base_url('admin/view_featured/'); ?>">
                        <span class="glyphicon glyphicon-upload"></span>  Update featured products
                    </a>
                </button>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <br>
    <div class="col-lg-12">
        <div class="panel panel-info ">
            <div class="panel-heading">
                System Report
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Report ID</th>
                                <th>Report</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($results as $row) {
                                ?>
                                <tr class = "odd gradeX">
                                    <?php
                                    echo "<td>" . $row->sr_id . "</td>";
                                    echo "<td>" . $row->report . "</td>";
                                    echo "<td>" . $row->report_date . "</td>";
                                }
                                ?>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<!-- /#page-wrapper -->

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
