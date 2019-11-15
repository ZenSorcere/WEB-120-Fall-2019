<!-- see Bill's Config file video to learn how to add a config file -->
<!-- Bill says it goes above the header include -->

<?php include ('includes/header.php'); ?>

<!-- START LEFT COL -->
<section>
 <h2 class="pageID">I'd love to hear from you!</h2>
 <p>Tell me what I can do for you, and let's chat!</p>
    
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "zen.sorcere@gmail.com";  //place your/your client's email address here
        $toName = "Mike Gilson"; //place your client's name here
        $website = "Web120 Portal";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    
</section>

<?php include ('includes/footer.php'); ?>
