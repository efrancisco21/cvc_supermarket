


<!-- Page Content -->
<div id="page-wrapper">
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Add new category
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?php echo form_open_multipart('staff/save_category/'); ?>
                    <table class="table">
                        <tr>
                            <td>Category </td>
                            <td><input type="text" name="Category_name" placeholder="Enter new category">
                                <?php echo form_error('Category_name', '<span class="error">', '</span>'); ?></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><?php echo form_submit('submit', 'Save', 'class="btn btn-danger"'); ?></td>
                        </tr>       
                    </table>
                </div>
                <!-- /.list-group -->

            </div>
            <!-- /#page-wrapper -->

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

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
