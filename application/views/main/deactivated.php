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



    <center>  <div class="panel panel-default">
        <div style=" margin-left: 70x;">
            <a href="<?php echo base_url(); ?>main/index">
                <img class="responsive-img" src="<?php echo base_url(); ?>assets/img/logo.png" width="150" height="150"></img>
            </a>
        </div>

        <div style="color: green">
            <?php

            echo "Your account is currently Deactivated";

            ?>
        </div>


        <div>
            <form role="form" class="col s12" action="<?php echo base_url() . 'main/login_validation'; ?>" method="post">

                <div class="row">
                    <div class="input-field col s4 push-s4">

                        <input id="email" name="emailad" value="<?= set_value('emailad') ?>"  type="text">
                        <label for="email">Email</label>
                        <?php echo form_error('emailad', '<span class="error">', '</span>'); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s4 push-s4">
                        <input id="pass" name="password" type="password" value="">
                        <label for="password">Password</label>
                        <?php echo form_error('password', '<span class="error">', '</span>'); ?>

                    </div>
                </div>


                    <div class="row">
                    <div class="col s12">
                        <button type="submit" class="waves-effect waves-light btn">Log In</button>
</div>

                    </div>

            </form>
        </div>


    </div>
</center>