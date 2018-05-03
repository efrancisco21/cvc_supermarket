
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Update Product 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?php echo form_open_multipart('staff/update_product/'); ?>
                    <table class="table">
                        <tr>
                            <td>Product ID</td>
                            <td>
                                <?php echo form_textarea('Menu_ID', $r->Menu_ID); ?>
                            </td>   
                        </tr>
                        <tr>
                            <td>Product name</td>
                            <td>
                                <?php echo form_textarea('Menu_name', $r->Menu_name); ?>
                            </td>   
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>
                                <?php echo form_textarea('Category', $r->Category); ?>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Starting price</td>
                            <td> <?php echo form_textarea('Price', $r->Price); ?></td>
                        </tr>
                        <td>Price</td>
                        <td>
                            <?php echo form_textarea('Price', $r->Price); ?>
                        </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>
                                <?php echo form_textarea('Description', $r->Description); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Quantity</td>
                            <td>
                                <?php echo form_textarea('Quantity', $r->Quantity); ?>
                            </td>
                        </tr>

                        <tr>

                            <td><?php echo form_submit('submit', 'Update', 'class="btn btn-danger"'); ?></td>
                            </
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

