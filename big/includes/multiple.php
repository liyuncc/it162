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

<!--Message before the form here-->
<p>Thanks for visiting my site! If you like my work or have any questions, please feel free to fill out the form. I'm looking forward to hearing from you!</p>    

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
    <div>
        <input type="text" id="fname" name="FirstName" required="required" placeholder="First Name (required)"><br>
        <input type="text" id="lname" name="LastName" required="required" placeholder="Last Name (required)"><br>
        <input type="text" id="email" name="Email" required="required" placeholder="Email (required)"><br>
    </div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
    <div class="question">
        <label>What services are you interested in?</label><br>

        <input type="checkbox" id="web_design" name="Question" value="web_design">
        <label for="web_design">Website Design</label><br>

        <input type="checkbox" id="web_manage" name="Question" value="web_manage">
        <label for="web_manage">Website Management</label><br>
        
        <input type="checkbox" id="app" name="Question" value="app">
        <label for="app">App Development</label><br>

        <input type="checkbox" id="other" name="Question" value="other">
        <label for="other">Other (Please Specify): </label><br>
        <input type="text" id="specify" name="Other" placeholder="Enter Here"><br>
    </div>
    
    <div>
        <label>Would you like to join our mailing list?</label><br>
        <input type="radio" name="mailing_list" value="yes" required="required" title="Mailing list is required"> Yes <br>
        <input type="radio" name="mailing_list" value="no"> No <br>
        
    
    </div>

    <textarea name="Message" id="message" placeholder="Write Message Here"></textarea>
    
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>

    <input type="submit" value="Submit" id="submit">

</form>



<!-- END HTML FORM -->

