
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Update Contact Page
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/update_contact/'); ?>
                    <table class="table">
                        <tr>
                            <td>Contact</td>
                            <td>
                                <?php echo form_textarea('contact', $r->contact); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>
                                <?php echo form_textarea('address', $r->address); ?>
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

