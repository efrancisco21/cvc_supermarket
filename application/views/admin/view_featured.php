
<!-- Page Content -->
<div id="page-wrapper">
    <br>
    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Featured Products
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <div class="row">
                            <br>
                            <?php
                            foreach ($results as $product) {
                                ?>

                                <div class="col-sm-4 col-lg-4 col-md-4">
                                    <center><img src="<?php echo base_url() . $product->picture ?>" width="150" height="150" /></center>
                                    <div class="thumbnail">

                                        <div class="caption">


                                            <b><small>Product: <?php echo $product->name; ?> </small></b>
                                            <br>
                                            <small> <b>Category: </b><?php echo $product->category; ?></small>
                                            <br>
                                            <small> <b>Description: </b><?php echo $product->description; ?></small>
                                            <br>


                                        </div>
                                        <center>
                                            <button type="button, submit"  class="btn btn-danger">
                                                <a style="color: white" href="<?php echo base_url('admin/delete_featured/' . $product->id); ?>">
                                                    <span class="glyphicon glyphicon-upload"></span> Delete
                                            </button>
                                        </center>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

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
