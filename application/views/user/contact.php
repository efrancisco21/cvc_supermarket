<div class="container" style="margin-top: 10%;">


    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Map Column -->

            <!-- Embedded Google Map -->
            <div class="col s12" style="overflow:hidden;height:500px;max-width:100%;">


            <div id="gmap-display" style="height:100%; width:100%;max-width:100%;">

            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=700+Pioneer+II+Bldg.,+Grace+Park,+Caloocan+City+Caloocan&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>

            </div>
            <a class="embedded-map-html" href="http://www.bootstrapskins.com/themes/wordpress" id="enable-map-info">premium wordpress themes</a>

            <style>#gmap-display .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style>

            </div>

            <script src="https://www.bootstrapskins.com/google-maps-authorization.js?id=f65d50a8-dbf7-2452-43c0-a67e10c7cd50&c=embedded-map-html&u=1453910656" defer="defer" async="async"></script>


    </div>


        <!-- Contact Details Column -->
        <div class="row">

            <div class="col s12">
                <strong>Contact Details</strong>
                <br>
                <?php
                foreach ($results as $row) {
                    echo $row->address;
                    ?>
                    <br><br>
                    <?php
                    echo $row->contact;
                }
                ?>


            </div>
        </div>
    </div>

    <!-- /.row -->
