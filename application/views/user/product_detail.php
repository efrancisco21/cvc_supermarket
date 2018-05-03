
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
              echo form_open('cart/add');
              echo form_hidden('id', $r->Menu_ID);
              echo form_hidden('name',  $r->Menu_name);
              echo form_hidden('start_price',  $r->Start_Price);
              echo form_hidden('price',  $r->Price);
              echo form_hidden('bought',  $r->Bought);
              echo form_hidden('stock',  $r->Quantity);

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
