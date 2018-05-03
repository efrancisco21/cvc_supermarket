
<!-- Page Content -->
<br>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        Home page
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Content</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($results as $row) {
                                        ?>
                                        <tr class = "odd gradeX">

                                            <?php
                                            echo "<td>" . $row->content . "</td>";
                                            ?>  
                                            <td> 
                                   
                                                <button type="button, submit"  class="btn btn-danger">
                                                    <a style="color: white" href="<?php echo base_url('admin/edit_home/' . $row->id); ?>">
                                                        <span class="glyphicon glyphicon-upload"></span> Update</a>
                                                </button></td>
                                        </tr>
                                        <?php
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
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>