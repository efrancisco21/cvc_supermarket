<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Codrops">

        <title>CVC Supermarket</title>

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/component.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>


                  <!--Import Google Icon Font-->
              <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
              <!--Import materialize.css-->
              <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.css"  media="screen,projection"/>
              <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pace.css"  media="screen,projection">

              <!--Let browser know website is optimized for mobile-->
              <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    </head>


    <body>

   <!-- Dropdown Structure -->

   <ul id="dropdown1" class="dropdown-content">
      <li><a href="<?php echo base_url() ?>user/how_to_order">How to Order</a></li>
       <li><a href="<?php echo base_url() ?>user/how_to_pay">How to Pay</a></li>
       <li><a href="<?php echo base_url() ?>main/logout">Logout</a></li>
   </ul>

   <ul id="dropdown2" class="dropdown-content">
       <li><a href="<?php echo base_url() ?>user/how_to_order">How to Order</a></li>
       <li><a href="<?php echo base_url() ?>user/how_to_pay">How to Pay</a></li>
       <li><a href="<?php echo base_url() ?>main/logout">Logout</a></li>
   </ul>


   <div>
   <!-- Static navbar -->
   <nav class="red accent-2">
       <div class="nav-wrapper">
   <a class="brand-logo" href="<?php echo base_url(); ?>main/user_page">CVC Supermarket</a>
    <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
   <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo base_url() ?>main/user_page">Home</a></li>
                               <li><a href="<?php echo base_url() ?>user/about">About</a></li>
                               <li><a href="<?php echo base_url() ?>user/contacts">Contact</a></li>
                               <li><a href="<?php echo base_url() ?>user/products">Products</a></li>
                               <li><a href="<?php echo base_url() ?>cart/index">View Cart</a></li>


       <!--Dropdown Trigger-->
       <li class="dropdown-button">
           <a href="#" class="dropdown-button" data-activates="dropdown2"><?php echo $this->session->userdata('emailad'); ?> <i class="material-icons right">arrow_drop_down</i></a>
       </li>
   </ul>

   <ul class="side-nav" id="nav-mobile">
      <li><a href="<?php echo base_url() ?>main/user_page">Home</a></li>
                               <li><a href="<?php echo base_url() ?>user/about">About</a></li>
                               <li><a href="<?php echo base_url() ?>user/contacts">Contact</a></li>
                               <li><a href="<?php echo base_url() ?>user/products">Products</a></li>
                               <li><a href="<?php echo base_url() ?>cart/index">View Cart</a></li>


       <li class="dropdown-button">
           <a href="#" class="dropdown-button" data-activates="dropdown1"><p class="truncate"><?php echo $this->session->userdata('emailad'); ?> <i class="material-icons right">arrow_drop_down</i></p></a>
       </li>
   </ul>

   </div><!--/.container-fluid -->
   </nav>
            <!-- Page Content -->

            <!-- Page Content -->
            <div class="container">
                <br>
                <div class="row">

                    <div class="col-md-3">
                      <div class="collection">
                          <a class="collection-item" href="<?php echo base_url(); ?>cart/index">View Cart</a>
                      </div>
                    </div>

                    <div class="col-md-9">


                        <div class="row">

                            <div class="col-lg-12">
                                <div class="panel panel-danger">
                                    <div class="panel-heading indigo lighten-4">
                                        Order Summary
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                      <th>Product name</th>
                                                        <th>Quantity</th>
                                                        <th>Item price</th>
                                                        <th>Order Status</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $sum = 0;
                                                    foreach ($results as $row) {
                                                        $sum+= $row->totalprice;
                                                        ?>
                                                        <tr >
                                                            <?php
                                                            echo "<td>" . $row->productname . "</td>";
                                                            echo "<td>" . $row->quantity . "</td>";
                                                            echo "<td>₱ " . $row->price . "</td>";
                                                            if ($row->status == 0) {
                                                                  echo "<td>" . "Pending" . "</td>";
                                                              } elseif ($row->status == 1) {
                                                                  echo "<td>" . "Completed" . "</td>";
                                                              } elseif ($row->status == 2) {
                                                                  echo "<td>" . "Cancelled" . "</td>";
                                                              } elseif ($row->status == 3) {
                                                                  echo "<td>" . "Processing" . "</td>";
                                                              } elseif ($row->status == 4) {
                                                                  echo "<td>" . "Expired" . "</td>";
                                                              }
                                                            echo "<td>₱ " . $row->totalprice . "</td>";
                                                            ?>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                <p class="lead"><?php echo "Total price: ₱", $sum; ?></p>


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
                                    <div class="panel-heading indigo lighten-4">
                                        Shipping Summary
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Customer name</th>
                                                        <th>Email address</th>
                                                        <th>Shipping address</th>
                                                        <th>Phone number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    foreach ($shipping as $row) {
                                                        ?>
                                                        <tr >
                                                            <?php
                                                            echo "<td>" . $row->name . "</td>";
                                                            echo "<td>" . $row->email . "</td>";
                                                            echo "<td> " . $row->address . "</td>";
                                                            echo "<td> " . $row->phone . "</td>";
                                                            ?>
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

                    </div>

                </div>

            </div>
            <!-- /.container -->

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


                                      <!--Import jQuery before materialize.js-->
                                          <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
                                          <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
                                          <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pace.js"></script>

                                          <script type="text/javascript">


                                        $(document).ready(function(){
                                          $('.parallax').parallax();

                                              $(".dropdown-button").dropdown();

                                               $('.button-collapse').sideNav({
                                          menuWidth: 245, // Default is 240
                                          //edge: 'right', // Choose the horizontal origin
                                         // closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
                                        });


                                    });
                                          </script>


    </body>

</html>
