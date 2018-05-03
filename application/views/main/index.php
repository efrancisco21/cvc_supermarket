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

      <div class="row">
        <div class="col s12">
          <div class="card hoverable small">
            <div class="card-image">
              <img src="<?php echo base_url(); ?>assets/img/body.svg">
            </div>
            <div class="card-content">
              <p>
                   <?php
                foreach ($content as $row) {
                    echo $row->content;
                }
                ?>

              </p>
            </div>
            <div class="card-action">
              <a href="http://www.mediafire.com/download/s45sbbyo28746dg/cvc.apk">Download</a>
            </div>
          </div>
        </div>
        </div>
</div>

<div class="container">

    <blockquote><h1>Categories</h1></blockquote>
</div>
<div class="divider"></div>
<div class="container">
<div class="collection">
        <?php
        foreach ($categories as $row) {
            ?>

                <a class="collection-item" href="<?php echo site_url('main/search_category/' . $row->Category_name); ?>">
                   <h5> <?php echo $row->Category_name; ?></h5>
                </a>


            <?php }
            ?>
            </div>
            </div>

    <div class="container">

    <blockquote><h1>Featured Products</h1></blockquote>
</div>
<div class="divider"></div>

        <div class="row">
            <?php
            foreach ($results as $row) {
                ?>
                <div class="col s3">
                    <?php
                    echo "<a href='" . site_url('main/product_detail/' . $row->product_id) ."'>";
                    ?>

                    <img class="responsive-img" width="150" height="80" src="<?php echo base_url() . $row->picture ?>" alt="">
                    <br>
                    <p class="green-text text-darken-2">
                    <?php echo $row->name;?>
                    </p>
                 <div class="divider"></div>
                </div>
            <?php
        }
        ?>
    </div>
<!-- /.row -->
