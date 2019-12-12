    <!-- START CONTENT SECTION FOR INDIVIDUAL PAGES -->
<?php

?>



<!-- START ACTUAL ORDER FORM -->

<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
<label>Required Information:</label>    
<fieldset>
    
    <div>
    <label>Your Name:</label>
    <input type="text" name="name" required="required" placeholder=" Full Name" title="Name is required" size= "44" tabindex="10" value="<?php if (isset($_POST['name'])) {
            echo htmlspecialchars($_POST['name']);} ?>">
    </div>
    <div>    
    <label>An Email we can respond to:</label>
    <input type="Email" name="Email" required="required" placeholder=" Email Address" title="A valid email is required" size= "44" tabindex="20" value="<?php if (isset($_POST['Email'])) {
            echo htmlspecialchars($_POST['Email']);} ?>">
    </div>
</fieldset>
</div>
<div>   
    <label>Do you have a specific Maker in mind?</label>
        <select name="Maker_in_mind?" tabindex="30">
            <option value="">Select a Maker:</option>
            <option value="Open">Any Maker</option>
            <option value="Jimmer">Jimmer</option>
            <option value="Elle">Elle</option>
        </select>
</div>
<div>  
    <label>Please describe your project:</label>
            <textarea name="comments" cols="44" rows="6" placeholder=" Describe finished item, size, look, 3D printing or laser cutting, etc." tabindex="40" ><?php if (isset($_POST['comments'])) {
            echo htmlspecialchars($_POST['comments']);} ?></textarea>
</div>  
<div>   
<fieldset class="notice">   
    <p>If you have STL files for 3D printing, SVG files for laser cutting, or image files for something you need designed, please email those to us at:  <strong>customorders@nightowlmerc.com</strong>.</p>
</fieldset> 
</div> 
<div>    
    <label>If you have a web link for the source files, enter it here:</label>
            <textarea name="web sources" cols="44" rows="4" placeholder=" URL for source files, example: 'https://www.thingiverse.com/thing:3907742'" tabindex="50" ><?php if (isset($_POST['comments'])) {
            echo htmlspecialchars($_POST['comments']);} ?></textarea>
</div>
<div>    
    <label>Do you have a specific material and color you'd like?</label>
            <textarea name="material and color" cols="44" rows="4" placeholder=" Leather, vinyl, wood; colors" tabindex="60" ><?php if (isset($_POST['comments'])) {
            echo htmlspecialchars($_POST['comments']);} ?></textarea>
</div>    
    
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>   
    <input type="submit" name="submit" value="Send Request" tabindex="70" />
</div> 
</form>
<!-- FINISH ACTUAL ORDER FORM -->
    


 <!--END CONTENT SECTION FOR INDIVIDUAL PAGES -->

