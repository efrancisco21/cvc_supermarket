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
<br/>

        <div class="container">

            <div class="row">
                    <div class="col s12">
                        <div>
                        <strong>Note:</strong> Your password must contain at least 8 to 31 characters, 1 uppercase letter, 1 lowercase letter , 1 number(s)</div>
                        </div>
                        </div>

                        <form  action="<?php echo base_url() . 'user/registration'; ?>" method="post">

                                <div class="form-group">
                                    <div class="input-field">
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?= set_value('firstname') ?>">
                                        <label for="firstname">Enter Firstname</label>
                                        <?php echo form_error('firstname', '<span class="error">', '</span>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?= set_value('lastname') ?>">
                                        <label for="lastname">Enter Lastname</label>
                                        <?php echo form_error('lastname', '<span class="error">', '</span>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <input type="text" class="form-control" id="emailad" name="emailad" value="<?= set_value('emailad') ?>">
                                           <label for="emailad">Enter Email</label>
                                        <?php echo form_error('emailad', '<span class="error">', '</span>'); ?>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <input type="text" class="form-control" id="contact" name="contact" value="<?= set_value('contact') ?>">
                                        <label for="contact">Enter contact number</label>
                                        <?php echo form_error('contact', '<span class="error">', '</span>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="input-field">
                                        <input type="password" class="form-control" id="inputPassword" name="password">
                                        <label for="inputPassword">Enter Password</label>
                                        <?php echo form_error('password', '<span class="error">', '</span>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                                        <label for="cpassword">Confirm Password</label>
                                        <?php echo form_error('cpassword', '<span class="error">', '</span>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <input id="captcha" type="text" class="form-control" name="captcha" value="">
                                        <label for="captcha">Enter Captcha</label>
                                        <?php echo form_error('captcha', '<span class="error">', '</span>'); ?>
                                    </div>
                                    <div class="col-sm-6">


                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <?php
                                        echo $image;
                                        $this->load->helper('form');
                                        echo form_hidden('captcha2', "$word");
                                        ?>
                                    </div>
                                </div>
                                </div>
                                </div>
                                <div class="form-group">

                        <div class="container">
                                    <div class="row">
                                    <div>

                                        <p>
                                            <input type="checkbox" name="tos" id="tos" value="Terms of services">
                                            <label for="tos">I agree to CVC Supermarket's <a href="<?php echo base_url(); ?>main/tos">Terms of Services. </a></label>
                                        </p>

                                            <div style="color: red">
                                                <?php echo form_error('tos', '<span class="error">', '</span>'); ?>
                                            </div>

                                    </div>
                                    </div>

                            </div>
                                </div>
                                <div class="container">
                                    <div id="success"></div>
                                 <button type="submit" class="waves-effect waves-light btn">Register account</button>

                                    <br>    <br>    <br>    <br>    <br>
                                </div>


                        </form>


                    </div>
                </div>

                <hr>
