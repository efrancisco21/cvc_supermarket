

<!-- Page Content -->

  <div class="container">
    <div class="row">
      <div class="col s12">

        <div class="collection">
          <?php
          foreach ($categories as $category) {
            ?>
            <a class="collection-item" href="<?php echo site_url('user/search_category/' . $category->Category_name); ?>" class="list-group-item">

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
                    <b>Stocks: <?php echo$product->Quantity?></b>
                    <br>
                  </center>


                        <center>
                            <?php
                            if ($product->Quantity != 0) {
                                echo form_open('cart/add');
                                echo form_hidden('id', $product->Menu_ID);
                                echo form_hidden('name', $product->Menu_name);
                                echo form_hidden('price', $product->Price);
                                echo form_hidden('bought', $product->Bought);
                                echo form_hidden('stock', $product->Quantity);

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
