
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">


        <div class="row">
          

            <div class="col-lg-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        Sales Report
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                <div class="list-group">

                                    <?php echo form_open_multipart('staff/filter_sales_report/'); ?>
                                    From:
                                    <input type="date" id="datefrom" name="date_from" value="<?php if (isset($date_from)) echo $date_from ?>">
                                    To:
                                    <input type="date" id="dateto" name="date_to" value="<?php if (isset($date_to)) echo $date_to ?>"> 
                                    <button class="btn btn-danger" type="submit" name="filter"> Submit </button>
                                    <?php
                                    echo form_close();
                                    ?>




                                </div>
                                <thead>
                                    <tr>
                                        <th>Product name</th>
                                        <th>Starting price</th>
                                        <th>Selling price</th>
                                        <th>Earned</th>
                                        <th>Bought</th>
                                        <th>Date of Purchase</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sum = 0;
                                    foreach ($results as $rows) {
                                        ?>
                                        <tr class = "odd gradeX">
                                            <?php
                                            echo "<td>" . $rows->product_name . "</td>";
                                            echo "<td>₱ " . $rows->start_price . "</td>";
                                            echo "<td>₱ " . $rows->price . "</td>";
                                            echo "<td>₱ " . $rows->earned . "</td>";
                                            echo "<td>" . $rows->bought . "</td>";
                                            echo "<td>" . $rows->date . "</td>";
                                            ?>

                                        </tr>
                                        <?php
                                        $sum+= $rows->earned;
                                    }
                                    ?>

                                <p class="lead"><?php echo "Total earnings: ₱", $sum; ?></p>

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