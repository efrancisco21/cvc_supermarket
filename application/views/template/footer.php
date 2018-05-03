
    </div>
    <!-- /.container -->
<!--
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script> -->

  <!--Import jQuery before materialize.js-->
      <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pace.js"></script>

      <script type="text/javascript">


    $(document).ready(function(){
      $('.parallax').parallax();

          $(".dropdown-button").dropdown();
          $(".button-collapse").sideNav();

          $('#dataTables-example').DataTable({
              responsive: true
          });

    });

      </script>
</body>

</html>
