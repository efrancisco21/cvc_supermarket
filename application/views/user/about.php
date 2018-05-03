

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
