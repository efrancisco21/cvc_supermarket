
<br>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">



        <div class="col-lg-12">
            <div class="panel panel-danger">
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
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Date Added</th>
                                    <th>Order Status</th>
                                    <th>Order Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sum = 0;
                                foreach ($results as $row) {
                                    $sum += $row->totalprice;
                                    echo"<tr>";

                                    echo "<td>" . $row->orderid . "</td>";
                                    echo "<td>" . $row->productname . "</td>";
                                    echo "<td>" . $row->quantity . "</td>";
                                    echo "<td>" . $row->date . "</td>";
                                    if ($row->status == 0) {
                                        echo "<td>" . "Pending" . "</td>";
                                    } elseif ($row->status == 1) {
                                        echo "<td>" . "Completed" . "</td>";
                                    } elseif ($row->status == 2) {
                                        echo "<td>" . "Cancelled" . "</td>";
                                    } elseif ($row->status == 3) {
                                        echo "<td>" . "Processing" . "</td>";
                                    }
                                    echo "<td>₱" . $row->totalprice . "</td>";
                                }
                                ?>     
                            <p class="lead"><?php echo "Total price: ₱", $sum, ""; ?></p>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

        <div class="col-lg-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    Shipping Summary
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Customer name</th>
                                    <th>Email Address</th>
                                    <th>Shipping Address</th>
                                    <th>Phone</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($shipping as $row) {

                                    echo"<tr>";

                                    echo "<td>" . $row->name . "</td>";
                                    echo "<td>" . $row->email . "</td>";
                                    echo "<td>" . $row->address . "</td>";
                                    echo "<td>" . $row->phone . "</td>";
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