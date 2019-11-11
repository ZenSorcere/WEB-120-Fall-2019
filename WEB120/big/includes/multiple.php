<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Your Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Your Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->


<div>	
    <fieldset>
        <legend>How did you hear about gilson-coding?</legend>
        <input type="checkbox" name="How_Did_You_Hear[]" value="Social Media" tabindex="30" /> Social Media <br />
        <input type="checkbox" name="How_Did_You_Hear[]" value="LinkedIn" /> LinkedIn <br />
        <input type="checkbox" name="How_Did_You_Hear[]" value="Associate_Coworker" /> Associate/Co-worker <br />
        <input type="checkbox" name="How_Did_You_Hear[]" value="Friend" /> Friend <br />
        <input type="checkbox" name="How_Did_You_Hear[]" value="Recommendation" /> Recommendation <br />
        <input type="checkbox" name="How_Did_You_Hear[]" value="Previous Project" /> Previous Project <br />
        <input type="checkbox" name="How_Did_You_Hear[]" value="Other" /> Other <br />
    </fieldset>
</div>

    <div>	
    <fieldset>
        <legend>What Services Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div>
<div>	
    <label>
        Describe your company in a few sentences:<br /><textarea name="Business Summary" cols="36" rows="4" placeholder="Summarize what you do" tabindex="50"></textarea>
    </label>
</div>
<div>	
    <label>
        List 3 to 5 words you would use to describe your business:<br /><textarea name="SEO Terms" cols="36" rows="4" placeholder="What are your primary SEO terms" tabindex="60"></textarea>
    </label>
</div>	
<div>	
    <label>
        Do you have a slogan or tagline that describes what you offer?<br /><textarea name="Slogan or Tagline" cols="36" rows="4" placeholder="How are you marketing yourself" tabindex="70"></textarea>
    </label>
</div>	
<div>	
    <label>
        Do you have a logo and/or a color scheme?<br /><textarea name="Logo and Colors" cols="36" rows="4" placeholder="Tell me about your branding" tabindex="80"></textarea>
    </label>
</div>
<div>	
    <label>
        Who will be providing website content? Do you have content ready?<br /><textarea name="State of Content" cols="36" rows="4" placeholder="Point of contact, state of content" tabindex="90"></textarea>
    </label>
</div>
<div>	
    <label>
        What is your budget and timeline?<br /><textarea name="Budget and Timeline" cols="36" rows="4" placeholder="planned costs, deadlines and milestones for completion" tabindex="100"></textarea>
    </label>
</div>
<div>	
    <label>
        Additional Comments:<br /><textarea name="Additional Comments" cols="36" rows="4" placeholder="Thoughts, Insights, Concerns" tabindex="100"></textarea>
    </label>
</div>
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

