
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>CVC Supermarket</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>admin/admin_page">CVC Supermarket</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('username'); ?> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                       
                            <li><a href="<?php echo base_url(); ?>admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>admin/admin_page"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Customers<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url(); ?>admin/view_users">Customer accounts</a>
                                    </li>

                                </ul>

                            </li>

                            <li>
                                <a href="#"><i class="fa fa-folder-open fa-fw"></i>Inventory<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Manage categories<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="<?php echo base_url(); ?>admin/add_category">Add category</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>admin/view_category">Category list</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Manage products<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="<?php echo base_url(); ?>admin/add_product">Add product</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>admin/product_list">Product list</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>admin/view_featured">View Featured products</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>

                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>"><i class="fa fa-reorder fa-fw"></i>Transactions<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>

                                        <a href="<?php echo base_url(); ?>admin/view_orders"><i class="fa fa-phone fa-fw"></i>Order</a>
                                    </li>


                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/view_payments"><i class="fa fa-usd fa-fw"></i>Payments</a>

                                <!-- /.nav-third-level -->
                            </li>
                        </ul>


                        </li>
                        <li>
                            <a href=""><i class="fa fa-sitemap fa-fw"></i>Staffs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>

                                    <a href="<?php echo base_url(); ?>admin/view_staff">View Staffs</a>
                                </li>


                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>admin/add_staff">Create Staff</a>

                            <!-- /.nav-third-level -->
                        </li>
                        </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>admin/sales_report"><i class="fa fa-filter fa-fw"></i>Sales Report</a>
                        </li>


                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>