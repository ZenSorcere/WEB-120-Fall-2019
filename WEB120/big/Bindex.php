<?php 
include "includes/config.php";
include "includes/header.php" ?>
        


 <h4>Tell me what I can do for you, and let's chat!</h4>

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
        $website = "Web120 BIG Website";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    
 
    
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 
<h3>Basic Website Design Cycle Resources</h3>
    
    <ul>
        <li class="h3"><a href="https://business.tutsplus.com/articles/how-to-extract-the-facts-with-a-web-design-client-questionnaire--fsw-1830" target="_blank" title="Web Design client questionnaire">Client Questionnaire Considerations</a><br>(business.tutsplus.com)</li>
        <li class="h3"><a href="https://www.smashingmagazine.com/2018/02/comprehensive-website-planning-guide-part1/" target="_blank" title="Website Planning Guide">Comprehensive Website Planning Guide</a><br>(smashingmagazine.com)</li>
        <li class="h3"><a href="https://www.justinmind.com/blog/website-wireframe-design-guide/" target="_blank" title="Wireframe Design Guide">Wireframe Design Guide</a><br>(justinmind.com)</li>
        <li class="h3"><a href="https://www.lucidchart.com/pages/templates/flowchart/website-flowchart-template" target="_blank" title="Lucid Charts flowchart Template">Website Flowchart Template</a><br>(lucidchart.com)</li>
    
    </ul>
    
    
    
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<?php include "includes/footer.php" ?>