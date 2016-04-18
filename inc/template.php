<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="description" content="Goran Bjelobrk web developer web entwickler CV lebenslauf">
        <title>Goran Bjelobrk Präsentation | <?php echo $this->title; ?></title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
        <?php
        include 'brojac.php';
       


        foreach ($this->stylesheets as $stylesheet) {
            echo '<link href="' . $stylesheet . '" rel="stylesheet" type="text/css" />' . "\n";
        }
        ?>
       
        <link rel="icon" href="ico.ico" type="images/x-icon"> 
        <link rel="icon" href="images/personal.png" type="images/x-icon">

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68961664-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- End Google Analytics -->


    </head>

    <body>

        <?php echo $this->body; ?>

        <div id="copyright">
            <p>Powered By</p>
            <div class="down">
                <ul>
                    <li><img src="images/php_mysql.png"></li>
                    <li><img src="images/jquery.png"></li>
                    <li><img src="images/compass-logo-cropped.png"></li>
                    <li><a href="baza/admin.php"><img src="images/icon-responsive-webdesign.png"></a></li>
                </ul>
            </div>
            <div id="copy"><p><?php echo " No." . $ukupan . " " ?> Copyright &copy;2015 Goran Bjelobrk. All rights reserved. </p></div>
        </div>
        
        <?php
        foreach ($this->javascripts as $javascript) {
            echo '<script src="' . $javascript . '" language="javascript" type="text/javascript" defer="defer"></script>' . "\n";
        }
        ?>

    </body>
</html>