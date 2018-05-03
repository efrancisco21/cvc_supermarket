<!-- /#sidebar-wrapper -->

<!-- Page Content -->

<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php echo form_open_multipart('billing/payment/'); ?>
                <table class="table">
                    <div class="alert alert-danger"><strong>Note:</strong> Please enter the order id of the order that you are going to pay for.</div>
                      <div class="alert alert-danger">Cash on delivery transaction numbers are defaulted to NA(Not Applicable)</div>

                      <div class="red-text text-lighten-1">

                          <?php
                          if($this->session->flashdata('errors')){//getting $data array from form_validation


                              echo $this->session->flashdata('errors');


                            }

                            // $data = $this->Billing_model->checkTransactionNum("NA");
                            //
                            // foreach($data as $num){
                            //   echo $num;
                            // }

                          ?>


                      </div>

                    <tr>
                      <div class="container">
                        <div class="row">
                        <td>Order ID:</td><td>
                          <div class="col s6 m6">
                          <input readOnly type="text" name="orderid" value="<?php echo $r->orderid; ?>"/>
                            <?php echo form_error('orderid', '<span class="error">', '</span>'); ?>

</div>
                          </td>
                          </div>
                        </div>
                    </tr>
                    <div>

                        Bank to bank

                        </label>
                    </div>
                    <div class="radio">

                            <input type="radio" name="typeofpay" id="bdo" value="Banco De Oro (BDO) (Bagtican branch)" onchange="disablefield();"

                            <?php

                                if($this->session->flashdata('typeofpay') == "Banco De Oro (BDO) (Bagtican branch)"){
                                  echo "checked";
                                }



                            ?> >
                            <label for="bdo">  Banco De Oro (BDO) (Bagtican branch)  </label>
                            <?php echo form_error('typeofpay', '<span class="error">', '</span>'); ?>

                    </div>
                    <div class="radio">

                            <input type="radio" name="typeofpay" id="bpi" value=" Bank of the Philippine Islands (BPI) (St. Ignatius branch)" onchange="disablefield();"
                            <?php

                                if($this->session->flashdata('typeofpay') == "Bank of the Philippine Islands (BPI) (St. Ignatius branch)"){
                                  echo "checked";
                                }



                            ?>




                            >
                            <label for="bpi">
                            Bank of the Philippine Islands (BPI) (St. Ignatius branch)
                              </label>
                            <?php echo form_error('typeofpay', '<span class="error">', '</span>'); ?>

                    </div>
                    <div class="radio">

                            <input type="radio" name="typeofpay" id="metro" value="Metrobank (Annapolis branch)" onchange="disablefield();"

                            <?php

                                if($this->session->flashdata('typeofpay') == "Metrobank (Annapolis branch)"){
                                  echo "checked";
                                }



                            ?>



                            >
                            <label for="metro">Metrobank (Annapolis branch)  </label>
                            <?php echo form_error('typeofpay', '<span class="error">', '</span>'); ?>

                    </div>
                    <br>

                    <div class="radio">
<!--diablefield function is in the header-->
                            <input type="radio" name="typeofpay" id="cod" value="Cash on Delivery" onchange="disablefield();"
                            <?php

                                if($this->session->flashdata('typeofpay') == "Cash on Delivery"){
                                  echo "checked";
                                }



                            ?>




                            >
                              <label for="cod">Cash on Delivery</label>
                            <?php echo form_error('typeofpay', '<span class="error">', '</span>'); ?>

                    </div>

                    <tr>
                        <div class="container">
                          <div class="row">
                        <td>Transaction number:</td>
                        <td>
                          <div class="col s6 m6">
<!--retain data on redirect-->
                          <input

                          <?php  if($this->session->flashdata('typeofpay') == "Cash on Delivery"){ echo "readOnly";}  ?>

                          id="cdeliveryform" type="text" name="transactionnum"  value="<?php echo $this->session->flashdata('transactionnum')?>"/>

                            <?php echo form_error('transactionnum', '<span class="error">', '</span>'); ?>
                          </div>
                          </div>
                        </div>
                          </td>
                    </tr>

                 
                    <tr>

                        <td><?php echo form_submit('submit', 'Save', 'class="btn btn-danger"'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->

</html>

</div>
</div>
</div>
</div>
<!-- /#page-content-wrapper -->


<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
