
<br>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">



        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Order Page
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Status</th>
                                    <th>Date Added</th>
                                    <th>Expiration Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($results as $row) {
                                    ?>
                                    <tr class = "odd gradeX">
                                        <?php
                                        echo "<td>" . $row->orderid . "</td>";
                                        if ($row->status == 0) {
                                            echo "<td>" . "Pending" . "</td>";
                                            echo "<td>" . $row->date . "</td>";
                                            echo "<td>" . $row->date_exp . "</td>";
                                            {
                                                ?>
                                                <td>

                                                        <a  class="btn btn-info" style="color: white" href="<?php echo base_url('admin/view_order_detail/' . $row->orderid); ?>">
                                                            <span class="glyphicon glyphicon-upload"></span> View Details</a>


                                                        <a class="btn btn-danger" style="color: white" href="<?php echo base_url('admin/cancel_order/' . $row->orderid); ?>">
                                                            <span class="glyphicon glyphicon-upload"></span> Cancel Order</a>


                                                        <a class="btn btn-warning" style="color: white" href="<?php echo base_url('admin/expire_order/' . $row->orderid); ?>">
                                                            <span class="glyphicon glyphicon-upload"></span> Expire Order</a>


                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } elseif ($row->status == 1) {
                                        echo "<td>" . "Completed" . "</td>";
                                        echo "<td>" . $row->date . "</td>";
                                        echo "<td>" . $row->date_exp . "</td>";
                                        {
                                            ?>
                                        <td>

                                                <a class="btn btn-info" style="color: white" href="<?php echo base_url('admin/view_order_detail/' . $row->orderid); ?>">
                                                    <span class="glyphicon glyphicon-upload"></span> View Details</a>



                                        </td>
                                        </tr>
                                        <?php
                                    }
                                } elseif ($row->status == 3) {
                                    echo "<td>" . "Processing" . "</td>";
                                    echo "<td>" . $row->date . "</td>";
                                    echo "<td>" . $row->date_exp . "</td>";
                                    {
                                        ?>
                                        <td>

                                                <a class="btn btn-info" style="color: white" href="<?php echo base_url('admin/view_order_detail/' . $row->orderid); ?>">
                                                    <span class="glyphicon glyphicon-upload"></span> View Details</a>


                                                <a class="btn btn-danger" style="color: white" href="<?php echo base_url('admin/cancel_order/' . $row->orderid); ?>">
                                                    <span class="glyphicon glyphicon-upload"></span> Cancel Order</a>


                                        </td>
                                        </tr>
                                        <?php
                                    }
                                } elseif ($row->status == 2) {
                                    echo "<td>" . "Cancelled" . "</td>";
                                    echo "<td>" . $row->date . "</td>";
                                    echo "<td>" . $row->date_exp . "</td>";

                                    ?>
                                    <td>

                                            <a  class="btn btn-info" style="color: white" href="<?php echo base_url('admin/view_order_detail/' . $row->orderid); ?>">
                                                <span class="glyphicon glyphicon-upload"></span> View Details</a>


                                    </td>
                                    </tr>
                                    <?php
                                }
                                elseif ($row->status == 4) {
                                    echo "<td>" . "Expired" . "</td>";
                                    echo "<td>" . $row->date . "</td>";
                                    echo "<td>" . $row->date_exp . "</td>";

                                    ?>
                                    <td>

                                            <a class="btn btn-info" style="color: white" href="<?php echo base_url('admin/view_order_detail/' . $row->orderid); ?>">
                                                <span class="glyphicon glyphicon-upload"></span> View Details</a>


                                    </td>
                                    </tr>
                                    <?php
                                }
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
