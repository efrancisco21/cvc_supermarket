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
  <!-- Page Content -->

  <div class="container">
    <div class="row">
      <div class="col s12">

        <div class="collection">
          <?php
          foreach ($categories as $category) {
            ?>
            <a class="collection-item" href="<?php echo site_url('main/search_category/' . $category->Category_name); ?>" class="list-group-item">

              <h5 class="center-align">
                <?php echo $category->Category_name; ?>
              </h5>
            </a>
            <?php }
            ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Page Content -->


      <div class="row">
        <?php
        foreach ($products as $product) {
          ?>

          <div class="col s12 m3">
            <center><img src="<?php echo base_url() . $product->Menu_image ?>" width="150" height="150" /></center>
            <div class="thumbnail">


<center>

                <b><h4>₱<?php echo $product->Price; ?></h4>
                  <small> <?php
                  echo "<a href='" . site_url('main/product_detail/' . $product->Menu_ID) . "'>$product->Menu_name</a>";
                  ?> </small></b>
                  <br>
                  <small> <b>Category: </b><?php echo $product->Category; ?></small>
                  <br>
                  <b>Stocks: </b><?php echo $product->Quantity?></p>
                  <br>
              </center>



              <center>
                <?php
                if ($product->Quantity != 0) {
                  echo form_open('main/restricted');
                  echo form_submit('submit', 'Add to cart', 'class="waves-effect waves-light btn green"');
                  echo form_close();
                } else {
                  ?>
                  <small> <b>There are no more stocks for this product.</b></small>
                  <?php
                }
                ?>
              </center>
            </div>
            <div class="divider"></div>
      <br>
          </div>
          <?php
        }
        ?>
      </div>
