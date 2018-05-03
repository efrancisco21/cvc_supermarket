<body>

<!-- Dropdown Structure -->

<ul id="dropdown1" class="dropdown-content">
    <li><a href="<?php echo base_url() ?>main/how_to_pay">How to Pay</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo base_url() ?>main/how_to_order">How to Order</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo base_url() ?>main/login">Login</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo base_url() ?>main/signup">Signup</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
    <li><a href="<?php echo base_url() ?>main/how_to_pay">How to Pay</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo base_url() ?>main/how_to_order">How to Order</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo base_url() ?>main/login">Login</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo base_url() ?>main/signup">Signup</a></li>
</ul>
<div>
<!-- Static navbar -->
<nav class="red accent-2">
    <div class="nav-wrapper">
<a class="brand-logo" href="<?php echo base_url(); ?>main/index">CVC Supermarket</a>
 <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
<ul class="right hide-on-med-and-down">
    <li><a href="<?php echo base_url() ?>main/index">Home</a></li>
    <li><a href="<?php echo base_url() ?>main/about">About</a></li>
    <li><a href="<?php echo base_url() ?>main/contacts">Contact</a></li>
    <li><a href="<?php echo base_url() ?>main/product">Products</a></li>

    <!--Dropdown Trigger-->
    <li class="dropdown-button">
        <a href="#" class="dropdown-button" data-activates="dropdown2">My account <i class="material-icons right">arrow_drop_down</i></a>
    </li>
</ul>

<ul class="side-nav" id="nav-mobile">
    <li><a href="<?php echo base_url() ?>main/index">Home</a></li>
    <li><a href="<?php echo base_url() ?>main/about">About</a></li>
    <li><a href="<?php echo base_url() ?>main/contacts">Contact</a></li>
    <li><a href="<?php echo base_url() ?>main/product">Products</a></li>

    <!--Dropdown Trigger-->
    <li class="dropdown-button">
        <a href="#" class="dropdown-button" data-activates="dropdown1">My account <i class="material-icons right">arrow_drop_down</i></a>
    </li>
</ul>

</div><!--/.container-fluid -->
</nav>
</div>

<!--parallac picture-->
<div>
    <img class="responsive-img" src="<?php echo base_url();?>assets/img/header2.svg">
</div>




   <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="container">
            <div class="col s5">
                     <img class="responsive-img" src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
                     </div>

            </div>
              <span class="card-title">About CVC Supermarket</span>
            <div class="card-content">
            <p class="flow-text">
                            <?php
                            foreach ($results as $row) {
                                echo $row->about;
                            }
                            ?>
                            </p>

            </div>
          </div>
        </div>
      </div>

            <!-- /.row -->

            <!-- Team Members -->
