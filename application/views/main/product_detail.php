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

  <div class="container" style="margin-top:2%">

    <table class="bordered">
      <thead>
        <th data-field="pdetails">
          <p class="flow-text">PRODUCT DETAILS</p>
        </th>
      </thead>
      <tbody>
        <tr>
          <td colspan="2">
            <p class="flow-text">  Product ID:  <?php echo $r->Menu_ID; ?></p>

          </td>
        </tr>

        <tr>
          <td colspan="2">
            <p class="flow-text">  Product Name: <?php echo $r->Menu_name; ?></p>

          </td>

        </tr>

        <tr>


          <td colspan="2">

            <p class="flow-text">Stock:  <?php echo $r->Quantity; ?> </p>
          </td>
        </tr>

        <tr>

          <td colspan="2">
            <p class="flow-text">Product Price:  ₱<?php echo $r->Price; ?> </p>

          </td>
        </tr>

        <tr>
          <td colspan="2">
            <p class="flow-text">Description: <?php echo $r->Description; ?></p>
          </td>

        </tr>

        <tr>
          <td colspan="2">

            <p class="flow-text">Product Category: <?php echo $r->Category; ?> </p>
          </td>

        </tr>

        <tr>
          <td>
            <p class="flow-text"> Product Image:</p>
          </td>
          <td>

            <img src="<?php echo base_url() . $r->Menu_image ?>" width="250" height="200" />
          </td>
        </tr>


        <tr>
          <td>

            <?php
            if ($r->Quantity != 0) {
              echo form_open('main/restricted');
              echo form_submit('submit', 'Add to cart', 'class="waves-effect waves-light btn green"');
              echo form_close();
            } else {
              ?>
              <small> <b>There are no more stocks for this product.</b></small>
              <?php
            }
            ?>

          </td>

        </tr>


      </div>







    </tbody>
  </table>
