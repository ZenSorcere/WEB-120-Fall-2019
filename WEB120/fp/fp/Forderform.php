    <!-- START CONTENT SECTION FOR INDIVIDUAL PAGES -->
<?php
include 'includes/Fheader.php'; 
?>

<h2 class="pageID"><i class="<?=$logo ?>"></i> <?=$PageID ?></h2>


<h3>Thank you for expressing interest in a special project!</h3>
<p>Due to the variety of requests, we have an open-ended system. Please fill out the form below.</p>
<h4>Custom Order Form:</h4>

<?php
    include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "zen.sorcere@gmail.com";  //place your/your client's email address here
        $toName = "Mike Gilson"; //place your client's name here
        $website = "Night Owl Mercantile - Order";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('orderform.php');#demonstrates multiple form elements

?>
 <!--END CONTENT SECTION FOR INDIVIDUAL PAGES -->

 <?php include 'includes/Ffooter.php'; ?>