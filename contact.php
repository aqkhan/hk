<?php
require_once 'contactengine.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Portfolio | Arslan Khan</title>
        <meta name="description" content="Portfolio of Arslan Khan , Full Stack Developer and Cheif Technology Officer" />
        <meta name="keywords" content="Arslan Khan, Arslan Khan, Developer, Full Stack, CTO" />
        <meta name="author" content="Arslan Khan" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/logo.css" />
        <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/raphael.js" type="text/javascript"></script>
    <script src="js/init.js" type="text/javascript"></script>


    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <script type='text/javascript' src='js/queryLoader.js'></script>
</head>
<body>
<div id="perspective" class="perspective effect-rotateleft">
    <div class="container" >
        <div class="wrapper lightbg">
            <!-- Top Navigation -->
            <div id="fixed-nav"><a href="#" id="showMenu" class="menu example6"><span></span></a></div>
            <section id="home" class="clearfix first-section">
                <div class="container">
                    <section class="contact-me">
                        <h2>Like what you See?</h2>
                        <div class="form-alert">asdfsdf</div>
                        <form id="contactMe-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <input type="text" class="form-control user-icon" name="Name" id="Name" placeholder="Name">

                            <input type="text" class="form-control mail-icon" name="Email" id="Email" placeholder="Email">

                            <input type="text" class="form-control subject-icon" name="Contact_Subject" id="Contact_Subject" placeholder="Subject">

                            <textarea class="form-control" name="Message" id="Message" placeholder="Body"></textarea>

                            <button name="submit" id="submit-contact-form" type="submit" class="btn">Let's Get Started</button>
                        </form>
                    </section>

                    <!--<h2 class="info text-gray">Like what you See?</h2>-->
                    <!--<section id="contact">-->
                    <!--<article>-->
                    <!--<label for="checkcontact" class="contactbutton"><div class="mail"></div>Get In touch</label><input id="checkcontact" type="checkbox">-->
                    <!-- -->
                    <!--<form action="contactengine.php" method="post" class="contactform">-->
                    <!--<p class="input_wrapper"><input type="text" name="Name" value=""  id ="Name"><label for="Name">NAME</label></p>-->
                    <!--<p class="input_wrapper"><input type="text" name="Email" value=""  id ="Email"><label for="Email">EMAIL</label></p>-->
                    <!--<p class="input_wrapper"><input type="text" name="Contact_Subject" value=""  id ="Contact_Subject"><label for="Contact_Subject">SUBJECT</label></p>-->
                    <!--<p class="textarea_wrapper"><textarea name="Message" id="Message"></textarea></p>-->
                    <!--<p class="submit_wrapper"><input type="submit" value="Send"></p>			-->
                    <!--</form>-->
                    <!--</article>-->
                    <!--</section>-->
                </div>
            </section>


            <section id="works" class="clearfix second-section" style="height:175px;">
                <div class="inner" style="padding:0;">
                    <a target="_blank" href="https://www.upwork.com/freelancers/~01ab8db6eccce21a31">
                        <div class="section-ico">
                            <div class="ico-bg second-section-ico-bg"></div>
                            <img src="img/hire.png" alt="">
                            <h5 class="text-blue">Hire Me</h5>
                        </div>
                    </a>
                </div>
            </section>
        </div>
    </div><!-- /container -->


    <nav class="outer-nav right vertical">
        <ul style="z-index:0;">
            <a href="about-me.html" class="circless">About</a>
            <a href="index.html" class="circless">Work</a>
            <a href="contact.php" class="circless">Contact</a>
        </ul>
    </nav>
</div>

<script src="js/classie.js"></script>
<script src="js/helper.js"></script>
<script src="js/grid3d.js"></script>
<script src="js/menu.js"></script>
<script>
    <?php
     echo $alertMsgFunction;
     ?>
</script>

<script>
    new grid3D( document.getElementById( 'grid3d' ) );
</script>
<script type='text/javascript'>
    QueryLoader.init();
</script>



</body>
</html>