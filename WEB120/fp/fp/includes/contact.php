    <!-- START CONTENT SECTION FOR INDIVIDUAL PAGES -->



<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
<label>Let Night Owl Mercantile know your thoughts!</label>
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
    <label>Select a topic:</label>
        <ul>
          <li><input type="checkbox" name="topic[]" value="general question" tabindex="30"
            <?php if(isset($_POST['topic']) && in_array('general question', $topic)) echo 'checked = "checked" ' ; ?>
            > General Question</li>
            <li><input type="checkbox" name="topic[]" value="product question" tabindex="40"
            <?php if(isset($_POST['topic']) && in_array('product question', $topic)) echo 'checked = "checked" ' ; ?>
            > Product Question</li>
            <li><input type="checkbox" name="topic[]" value="Order/Billing question" tabindex="50"
            <?php if(isset($_POST['topic']) && in_array('Order/Billing question', $topic)) echo 'checked = "checked" ' ; ?>
            > Order/Billing question</li>
            <li><input type="checkbox" name="topic[]" value="Comment/Feedback" tabindex="60"
            <?php if(isset($_POST['topic']) && in_array('Comment/Feedback', $topic)) echo 'checked = "checked" ' ; ?>
            > Comment/Feedback</li>
        </ul>
</div>
<div>
    <label>Add your comments/questions below:</label>
            <textarea name="comments" cols="44" rows="6" placeholder=" Type your questions or comments here" tabindex="70" ><?php if (isset($_POST['comments'])) {
            echo htmlspecialchars($_POST['comments']);} ?></textarea>
</div>
  <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
<div> 
    <input type="submit" name="submit" value="Send It" tabindex="80" >

<input type="button" onclick= "window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'" value="Reset" tabindex="90">
</div>

</form>

