
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

                <a class="collection-item" href="<?php echo site_url('user/search_category/' . $row->Category_name); ?>">
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
                    echo "<a href='" . site_url('user/product_detail/' . $row->product_id) ."'>";
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
