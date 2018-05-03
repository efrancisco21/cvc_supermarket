
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Add new product
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?php echo form_open_multipart('staff/save_product/'); ?>
                    <table class="table">
                       
                        <tr>
                            <td>Title</td>
                            <td><?php echo form_input('Menu_name'); ?>   
                                <?php echo form_error('Menu_name', '<span class="error">', '</span>'); ?></td>
                        </tr>
                        <tr>
                            <td>Starting price</td>
                            <td><?php echo form_input('Start_Price'); ?>    
                                <?php echo form_error('Start_Price', '<span class="error">', '</span>'); ?></td>
                        </tr>
                        <tr>
                            <td>Selling price</td>
                            <td><?php echo form_input('Price'); ?>    
                                <?php echo form_error('Price', '<span class="error">', '</span>'); ?></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><?php echo form_textarea('Description'); ?>
                                <?php echo form_error('Description', '<span class="error">', '</span>'); ?></td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>
                                <select id="category" name="Category">
                                    <option value="--"></option>
                                    <?php
                                    foreach ($categories as $category) {
                                        ?>
                                        <option value="<?php echo $category->Category_name; ?>"><?php echo $category->Category_name; ?></option>
                                    <?php } ?>
                                </select>

                            </td>


                        </tr>

                        <tr>
                            <td>Stock</td>
                            <td><?php echo form_input('Quantity'); ?>
                                <?php echo form_error('Quantity', '<span class="error">', '</span>'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><?php echo form_upload('Menu_image'); ?>
                                <?php echo form_error('Menu_image', '<span class="error">', '</span>'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
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
