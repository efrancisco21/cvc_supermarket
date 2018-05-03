
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Update Home Page
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/update_home/'); ?>
                    <table class="table">
                        <tr>
                            <td>Content</td>
                            <td>
                                <?php echo form_textarea('content', $r->content); ?>
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

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

