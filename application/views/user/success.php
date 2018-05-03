
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

</div>

            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div class="container" style="margin-top: 10%">
                <div class="container-fluid">
                    <div class="col s12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i> CVC Supermarket</h4>
                            </div>
                            <div class="panel-body">

                                <p>Your order has been successfully placed.</p>
                                <p>Click <b><a href="<?php echo base_url();?>user/view_orders">here</a></b> to view your order histories/transactions.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#page-content-wrapper -->

            </div>

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
