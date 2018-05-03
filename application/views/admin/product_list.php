

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Product details
                    </div>
                    <div class="alert alert-info"><strong>Reminder:</strong>To insert the records to the inventory for monitoring once, every day.</div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Starting Price</th>
                                        <th>Selling Price</th>
                                        <th>Bought</th>
                                        <th>Stock</th>
                                        <th>Category</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($products as $product) {
                                        ?>
                                        <tr class = "odd gradeX">
                                            <?php
                                            echo "<td>" . $product->Menu_ID . "</td>";
                                            echo "<td>" . $product->Menu_name . "</td>";
                                            echo "<td>" . $product->Description . "</td>";
                                            echo "<td>₱ " . $product->Start_Price . "</td>";
                                            echo "<td>₱ " . $product->Price . "</td>";
                                            echo "<td>" . $product->Bought . "</td>";

                                            if ($product->Quantity <= 20) {
                                                ?>
                                                <td>  <p style="color: red"> <?php echo $product->Quantity; ?></td>
                                                <?php
                                            } else {
                                                echo "<td>" . $product->Quantity . "</td>";
                                            }
                                            echo "<td>" . $product->Category . "</td>";
                                            ?>
                                            <td>
                                                    <a class="btn btn-danger" style="color: white" href="<?php echo base_url('admin/delete_product/' . $product->Menu_ID); ?>">
                                                        <span class="glyphicon glyphicon-upload"></span> Delete</a>



                                                    <a  class="btn btn-warning" style="color: white" href="<?php echo base_url('admin/edit_product/' . $product->Menu_ID); ?>">
                                                        <span class="glyphicon glyphicon-upload"></span> Update</a>



                                                    <a class="btn btn-success" style="color: white" href="<?php echo base_url('admin/product_detail/' . $product->Menu_ID); ?>">
                                                        <span class="glyphicon glyphicon-upload"></span> View</a>


                                            </td>
                                            </button>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                </tbody>
                            </table>

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
