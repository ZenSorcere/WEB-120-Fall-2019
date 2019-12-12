<?php
include "includes/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title ?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">

<script src="https://kit.fontawesome.com/e095491dca.js" crossorigin="anonymous"></script>    
<link rel="stylesheet" href="css/tnav.css" />
<link rel="stylesheet" href="css/template.css" />

<link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Engagement&display=swap" rel="stylesheet">   
<link href="https://fonts.googleapis.com/css?family=Exo+2:500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Monda&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
<script src="js/script.js"></script>


    
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header class>
   <a href="template.php"><img class="logo" src="images/owl.jpg" alt="placeholder owl">
   <h1>Night Owl Mercantile</h1></a>
</header>
  <nav id="cssmenu">
  <ul>
     <li><a href="template.php"><span><i class="fas fa-images"></i> Catalog</span></a></li>
     <li><a href="orderform.php"><span><i class="fas fa-file-alt"></i> Order Form</span></a></li> 
     <li><a href="#"><span><i class="fas fa-address-card"></i> About Us</span></a>
        <ul>
           <li><a href="about.php"><span><i class="fas fa-address-card"></i> Who We Are</span></a></li>
           <li><a href="contact.php"><span><i class="fas fa-envelope"></i> Contact Us</span></a></li>
        </ul>
     </li>
     <li><a href="cart.php"><span><i class="fas fa-cart-plus"></i> Shopping Cart?</span></a></li>
  </ul>
  </nav>

  <section>
<!-- END OF HEADER.PHP ELEMENTS -->

    <!-- START CONTENT SECTION FOR INDIVIDUAL PAGES -->

 <h2 class="pageID"><i class="<?=$logo ?>"></i> <?=$PageID ?></h2>

 <p class="important"><em>The Content section will be different on each page, with the Catalog page having Search filter buttons, and product images.  The Order Form will have a form with various inputs for the user to submit with. The about Us page will very similar to this template. The Contact Us form will be a simpler form for communication.  The shopping Cart will be bonus if I have time to attempt to install something, but will otherwise be similar to this template page, as it will be a placeholder. There will also be two form-completion pages that will align with this template.</em></p>

 <div class="finalp">
   <p>Proceed to the completed Final Project Site here:</p>
   <p><a class="final" href="https://gilson-coding.com/WEB120/fp/fp/catalog.php" target="_blank" title="Final Project Site">Night Owl Mercantile</a></p>
 </div>  
   
 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

 <!--END CONTENT SECTION FOR INDIVIDUAL PAGES -->

<!--FOOTER.PHP STARTS HERE -->

</section>
 <footer>
  <p><small>&copy; 2019 - <?php date('Y'); ?> by <a href="contactme.php" target="_blank">Mike Gilson</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->



</body>
</html>