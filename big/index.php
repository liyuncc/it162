<?php include 'includes/header.php'; ?>

    <?php 
        include 'includes/contact_include.php';
        $toAddress = "liyuncecil@gmail.com";  //place your/your client's email address here
        $toName = "Liyun Cecil"; //place your client's name here
        $website = "Liyun's IT162 BIG Client Questionnaire Form";  //place NAME of your client's website

        echo loadContact('multiple.php', 'multiple-feedback.php');#demonstrates multiple form elements

    ?>
    
    
    </div>
    <!-- END LEFT COL-->


    <!-- START RIGHT COL-->
    <div class="rightcol">
        <h3>Basic Website Design Cycle</h3>
        <img id="web-cycle" src="images/webdevcycle.png" alt="Web Design Life Cycle" title="Web Design Life Cycle">
        <h4 class="cycle-resource">More Resources:</h4>
        <ul class="citation">
            <li><a href="https://the-loupe.com/blog/7-phases-of-web-design-and-development-life-cycle" target="_blank">The Loupe</a></li>
            <li><a href="https://webflow.com/blog/the-web-design-process-in-7-simple-steps" target="_blank">Webflow Blog</a></li>
            <li><a href="https://xbsoftware.com/blog/website-development-process-full-guide/" target="_blank">XB Software</a></li>
        </ul>

    </div>
    <!-- END RIGHT COL-->
   
</div>    

<?php include 'includes/footer.php'; ?>




