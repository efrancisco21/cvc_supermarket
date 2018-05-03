
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">


        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Create new staff
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="panel-body">
                        <form class="form-horizontal" action="<?php echo base_url() . 'admin/create_staff'; ?>" method="post">
                            <fieldset>
                                <div style="color: red">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Firstname</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter Firstname" value="<?= set_value('firstname') ?>">
                                            <?php echo form_error('firstname', '<span class="error">', '</span>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Lastname</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Lastname" value="<?= set_value('lastname') ?>">
                                            <?php echo form_error('lastname', '<span class="error">', '</span>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Email Address</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" id="emailad" name="emailad" placeholder="Enter Email" value="<?= set_value('emailad') ?>">
                                            <?php echo form_error('emailad', '<span class="error">', '</span>'); ?>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-2 control-label">Password</label>

                                        <div class="col-lg-7">
                                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter Password">
                                            <?php echo form_error('password', '<span class="error">', '</span>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-2 control-label">Confirm Password</label>
                                        <div class="col-lg-7">
                                            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
                                            <?php echo form_error('cpassword', '<span class="error">', '</span>'); ?>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button type="submit" class="btn btn-success">Save  <span class="glyphicon glyphicon-book"></span></button>
                                        </div>
                                    </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
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
