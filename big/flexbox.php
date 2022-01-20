<!--index.php of big project-->
<?php include "includes/header.php"; ?> 

    <!-- image show or hide based on the screen size here-->
    <img src="images/flexbox.png" class="desktop" alt="Picture of flexbox design">

    <h4>Background: Why was Flexbox created? </h4>
    <p>When it came to creating CSS layouts in the past, floats and positioning were widely used. Let’s take floats as an example, They were originally used in the print industry to wrap text around an image. Then floats were used for layouts in web design. However, floats have been creating problems and issues for web developers and designers. For instance, it is very difficult to center an element perfectly or “make all columns in multiple column layouts adopt the same height even if they contain a different amount of content (Flexbox).” In order to solve some of the problems, Flexbox was created. According to Coyier, it provides an efficient way to “layout, align and distribute space among items in a container.” The author further explains the main idea behind the flexbox which is to “give the container the ability to alter its items’ width/height to best fill the available space.” Therefore, the flexbox is very responsive to devices with different screen sizes.</p>
    
    <h4>What is Flexbox?</h4>
    <p>According to CSS Flexbox (Flexible Box) from the W3Schools website, “it makes it easier to design a flexible responsive layout structure without using float or positioning.” In addition, flexbox properties are supported in all modern browsers. It is widely used for 97.84% of all users globally (“Can I Use... Support Tables for HTML5, CSS3, Etc”). </p>
    <p>Flexbox is originally used to create columns or rows. It allows us to manage flex items either vertically or horizontally. According to Basic Concepts of Flexbox from the WDN Web Docs website, there are two important concepts we need to understand before applying flexbox. The first one is the two axes of flexbox: the main and cross axis. The main axis is defined by flex-direction property and the cross axis is perpendicular to it. The second one is “flexbox makes no assumption about the writing mode of the document.” We need to think about “start and end” rather than left and right while arranging items in the way we want. </p>

    
    <h4>When to use Flexbox?</h4>
    <p>According to Maldonado, flexbox is recommended in the following situations. First, when we have a small layout which means there are just a few rows or columns to create. Second, when we need to align elements either vertically or horizontally. Last but not least, when we need a content-first design. The author suggests that If we just want everything to fit in but we don’t know exactly how the content is going to look like, it’s the ideal scenario to use flexbox.</p>
    <p>In summary, Flexbox is a wonderful tool to create responsive small-scale layouts without a hassle compared to floats or positioning. Plus, the CSS code is cleaner and easier to maintain. </p>
    

    </div>
    <!-- END LEFT COL-->


    <!-- START RIGHT COL-->
    <div class="rightcol">
        <h3>Citations</h3>
        <ul class="citation">
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox#:~:text=The%20cross%20axis%20runs%20perpendicular%20to%20the%20main%20axis,%20therefore,%20axis%20runs%20along%20the%20rows" target="_blank">“Basic Concepts of Flexbox.”</a> MDN Web Docs.</li>
            <li><a href="https://www.w3schools.com/css/css3_flexbox.asp" target="_blank">“CSS Flexbox.”</a> CSS Flexbox (Flexible Box).</li>
            <li><a href="https://caniuse.com/#feat=flexbox" target="_blank">Can I Use... Support Tables for HTML5, CSS3, Etc.</a></li>
            <li><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">“A Complete Guide to Flexbox: CSS-Tricks.”</a> CSS, 12 June 2020.</li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox" target="_blank">“Flexbox.”</a> MDN Web Docs.</li>
            <li><a href="https://blog.logrocket.com/flexbox-vs-css-grid/" target="_blank">“When to Use Flexbox and When to Use CSS Grid.” </a>LogRocket Blog, 3 Apr. 2020.</li>
        
        </ul>

    </div>
    <!-- END RIGHT COL-->
   
</div>
<!-- END ROW WRAPPER-->

<?php include "includes/footer.php"; ?>