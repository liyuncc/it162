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
        <input type="text" id="fname" name="FirstName" required="required" placeholder="First Name (required)"><br>
        <input type="text" id="lname" name="LastName" required="required" placeholder="Last Name (required)"><br>
        <input type="text" id="email" name="Email" required="required" placeholder="Email (required)"><br>
    </div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
    <div class="question">
        <label>Questions? Pick a Topic:</label><br>

        <input type="radio" id="web_design" name="Question" value="web_design">
        <label for="web_design">Website Design</label><br>

        <input type="radio" id="web_manage" name="Question" value="web_manage">
        <label for="web_manage">Website Management</label><br>
        <input type="radio" id="app" name="Question" value="app">
        <label for="app">App Development</label><br>

        <input type="radio" id="other" name="Question" value="other">
        <label for="other">Other (Please Specify): </label><br>
        <input type="text" id="specify" name="Other" placeholder="Enter Here"><br>
    </div>

    <textarea name="Message" id="message" placeholder="Message"></textarea>
    
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>

    <input type="submit" value="Submit" id="submit">

</form>



<!-- END HTML FORM -->

