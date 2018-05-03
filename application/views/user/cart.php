
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Codrops">

    <title>CVC Supermarket</title>

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



    <script>
        function clear_cart() {
            var result = confirm('Are you sure want to clear all bookings?');

            if (result) {
                window.location = "<?php echo base_url(); ?>cart/remove/all";
            } else {
return false; // cancel button
}
}
</script>
<!-- Bootstrap Core CSS -->

<!-- /#sidebar-wrapper -->

<!-- Page Content -->        <div style="margin-top: 5%"></div>
<div class="row">
    <div class="col s12 m2">

        <div class="collection ">
            <a href="<?php echo base_url(); ?>user/view_orders" class="collection-item">Order page</a>
        </div>


    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m5">
            <h5>Your shopping cart</h5>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m5">
            <a href='<?php echo base_url() . "user/products" ?>'>Back to product page</a>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m5">
            <div style="color:#F00"><?php echo $message ?></div>
        </div>
    </div>



  <?php if ($cart = $this->cart->contents()): ?>
    <div class="row">
        <div class="col s12">
            <table class="highlight">
                <!--thead-->
                <thead>
                        <tr bgcolor="#FFFFFF" style="font-weight:bold">
                            <th data-field="serial">Serial</th>
                            <th data-field="name">Name</th>
                            <th data-field="price">Price</th>
                            <th data-field="qty">Qty</th>
                            <th data-field="amount">Amount</th>
                            <th data-field="options">Options</th>
                        </tr>

                    </thead>

                    <!--end of thead-->
                    <tbody>
                        <?php
                        echo form_open('cart/update_cart');
                        $grand_total = 0;
                        $i = 1;

                        foreach ($cart as $item):
                            echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);

                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        <tr>
                            <td>
                                <?php echo $i++; ?>
                            </td>
                            <td>
                                <?php echo $item['name']; ?>
                            </td>
                            <td>
                                ₱ <?php echo number_format($item['price'], 2); ?>
                            </td>
                            <td>
                                <?php
                                echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1"');
                                ?>

                            </td>
                            <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td>
                                ₱ <?php echo number_format($item['subtotal'], 2) ?>
                            </td>
                            <td>
                                <?php echo anchor('cart/remove/' . $item['rowid'], 'Cancel'); ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>

            </tbody>

        </table>
</div>
    </div>


                        <div class="row" >
                                <div class="col s12 m2" style="margin-bottom: 15px;">

                                    <b>Order Total:     ₱<?php echo number_format($grand_total, 2); ?></b>

                                </div>


                                <div class="col s12 m2"  style="margin-bottom: 15px;">
                                    <input  class="waves-effect waves-light btn red lighten-1" type="button" value="Clear Cart" onclick="clear_cart()">
                                </div>

                                <div class="col s12 m2"  style="margin-bottom: 15px;">


                                    <button  class="waves-effect waves-light btn blue lighten-1" type="submit">Update Cart</button>
                                    <?php echo form_close(); ?>
                                </div>

                                <div class="col s12 m2"  style="margin-bottom: 15px;">



                                    <a style="color: black" href="<?php echo base_url(); ?>billing/index">
                                        <input  class="waves-effect waves-light btn green lighten-1" type="submit" value="Place Order">
                                    </a>
                                </div>

                            </div>

      <?php endif; ?>
</div>
</div>
