
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Codrops">

        <title>CVC Supermarket</title>

          <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pace.css"  media="screen,projection">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script type="text/javascript">
function disablefield(){
if (document.getElementById('cod').checked == 1){
document.getElementById('cdeliveryform').readOnly=true;
document.getElementById('cdeliveryform').value='NA';
}else{
document.getElementById('cdeliveryform').readOnly=false;
document.getElementById('cdeliveryform').value='';
 }

}
</script>


    </head>


 <body>

<!-- Dropdown Structure -->

<ul id="dropdown1" class="dropdown-content">
   <li><a href="<?php echo base_url() ?>user/how_to_order">How to Order</a></li>
    <li><a href="<?php echo base_url() ?>user/how_to_pay">How to Pay</a></li>
    <li><a href="<?php echo base_url() ?>main/logout">Logout</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
    <li><a href="<?php echo base_url() ?>user/how_to_order">How to Order</a></li>
    <li><a href="<?php echo base_url() ?>user/how_to_pay">How to Pay</a></li>
    <li><a href="<?php echo base_url() ?>main/logout">Logout</a></li>
</ul>


<div>
<!-- Static navbar -->
<nav class="red accent-2">
    <div class="nav-wrapper">
<a class="brand-logo" href="<?php echo base_url(); ?>main/user_page">CVC Supermarket</a>
 <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
<ul class="right hide-on-med-and-down">
   <li><a href="<?php echo base_url() ?>main/user_page">Home</a></li>
                            <li><a href="<?php echo base_url() ?>user/about">About</a></li>
                            <li><a href="<?php echo base_url() ?>user/contacts">Contact</a></li>
                            <li><a href="<?php echo base_url() ?>user/products">Products</a></li>
                            <li><a href="<?php echo base_url() ?>cart/index">View Cart</a></li>


    <!--Dropdown Trigger-->
    <li class="dropdown-button">
        <a href="#" class="dropdown-button" data-activates="dropdown2"><?php echo $this->session->userdata('emailad'); ?> <i class="material-icons right">arrow_drop_down</i></a>
    </li>
</ul>

<ul class="side-nav" id="nav-mobile">
   <li><a href="<?php echo base_url() ?>main/user_page">Home</a></li>
                            <li><a href="<?php echo base_url() ?>user/about">About</a></li>
                            <li><a href="<?php echo base_url() ?>user/contacts">Contact</a></li>
                            <li><a href="<?php echo base_url() ?>user/products">Products</a></li>
                            <li><a href="<?php echo base_url() ?>cart/index">View Cart</a></li>


    <li class="dropdown-button">
        <a href="#" class="dropdown-button" data-activates="dropdown1"><p class="truncate"><?php echo $this->session->userdata('emailad'); ?> <i class="material-icons right">arrow_drop_down</i></p></a>
    </li>
</ul>

</div><!--/.container-fluid -->
</nav>

</div>
         <!--parallac picture-->
<div>
    <img class="responsive-img" src="<?php echo base_url();?>assets/img/header2.svg">
</div>
