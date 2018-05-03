

<div id="page-wrapper">
    <div class="container-fluid">
        <br>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        Product details
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="col-xs-6 col-md-6">
                            <div class="jumbotron" style="background-color:transparent ">

                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Product ID</label>
                                    <div class="col-sm-6">
                                        :   <?php echo $r->Menu_ID; ?>    
                                    </div>

                                </div>
                                <br>

                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Product Name</label>
                                    <div class="col-sm-6">
                                        : <?php echo $r->Menu_name; ?>         
                                    </div>
                                </div>

                                <br>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Stock</label>
                                    <?php if ($r->Quantity <= 20) { ?>
                                    <div class="col-sm-6" style="color: red">
                                            : <?php echo $r->Quantity; ?>    
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-sm-6" >
                                            : <?php echo $r->Quantity; ?>    
                                        </div>
                                    <?php } ?>

                                </div>

                                <br>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Product Price</label>
                                    <div class="col-sm-6">
                                        : ₱<?php echo $r->Price; ?>

                                    </div>
                                </div>

                                <br>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Description</label>
                                    <div class="col-sm-7">
                                        : <?php echo $r->Description; ?>      
                                    </div>
                                </div>

                                <br>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Product Category</label>
                                    <div class="col-sm-6">
                                        :<?php echo $r->Category; ?>    
                                    </div>
                                </div>
                                <br>




                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">

                            <div class="jumbotron" style="height: 400px;">
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Product Image</label>
                                    </br></br>
                                    <div class="col-sm-5">
                                        <td><img src="<?php echo base_url() . $r->Menu_image ?>" width="250" height="200" /></td>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

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