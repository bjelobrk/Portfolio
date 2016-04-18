<?php
session_start();
require_once('libraries/Page.php');
$page = new Page;
$page->setTitle('Home');
$page->startBody();

function curPageName() {
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}
?>

<section name="top" id="screen1">

    <div class="home-overlay"></div>
    <div class="intro">
        <div class="start"><p><?php echo $top['top1']; ?></p></div>
        <h1><?php echo $top['top2']; ?></h1>
        <div class="start"><p><?php echo $top['top3']; ?></p></div>
        <div class="bounce"><a href="#Unterlagen"><i class="fa fa-angle-double-down"></i></a></div>
    </div>
    <nav>
        <div class="nav-button"></div>
        <div class="flags"><a href="<?php echo curPageName() . '?lang=gb' ?>"><img src="images/gb.png"></a>
            <a href="<?php echo curPageName() . '?lang=de' ?>"><img src="images/de.png"></a>
        </div>
        <ul class="primary-nav">
            <li><a href="#top"><?php echo $lang['home']; ?></a></li>
            <li><a href="#Unterlagen"><?php echo $lang['documents']; ?></a></li>
            <li><a href="#kenntnisse"><?php echo $lang['skills']; ?></a></li>
            <li><a href="#Kontakt"><?php echo $lang['contact']; ?></a></li>


        </ul>


    </nav>
    <div class="top"><a href="#top"><img src="images/top.png"></a></div>  
</section>
<section name="Unterlagen" id="screen2">
    <div class="title">
        <h1 class="header-text"><div class="text"><?php echo $lang['documents']; ?></div></h1>
        <div class="subtitle">
            <p> <?php echo $documents['doc1']; ?>
            </p>
        </div>
    </div>
    <div class="row">
        <ul>  
            <li><a class="cv" ><h3><?php echo $documents['doc2']; ?></h3><img  src="images/cv.png"><p class="open1"><?php echo $documents['doc6']; ?></p></a></li>
            <li><a class="cl"><h3><?php echo $documents['doc3']; ?></h3><img src="images/brief.png" ><p class="open1"><?php echo $documents['doc6']; ?></p></a></li>
            <li><a class="ser"><h3><?php echo $documents['doc4']; ?></h3><img src="images/certifikat.png"><p class="open1"><?php echo $documents['doc6']; ?></p></a></li>
        </ul>
        <!------------------------------------------------------------------------------------------------------------- -->	
        <div class="win1" style="display: none; width: auto;">

            <div class="close"><div class="x"><p>&#10006;</p></div></div>
            <p class="wintittle"><?php echo $documents['doc2']; ?></p>

            <img src="images/Lebenslauf.png">
            <div class="bottom"><a href="pdf/Lebenslauf.pdf">Download</a></div>	
        </div>

        <!------------------------------------------------------------------------------------------------------------- -->
        <!------------------------------------------------------------------------------------------------------------- -->	    

        <div class="win2" style="display: none; width: auto;">
            <div class="close"><div class="x"><p>&#10006;</p></div></div>
            <p class="wintittle"><?php echo $documents['doc3']; ?></p>
            <p class="letter">   Sehr geehrte Damen und Herren,<br><br>

                ich interessiere mich für ein einmonatiges Praktikum als Junior PHP Entwickler,
                um erste Erfahrung in Deutschland zu sammeln und meine Kenntnisse erweitern.<br><br>

                Mein Studium des Wirtschaftsingenieurwesens im IT Bereich habe ich an der Universität 
                in Novi Sad (Serbien) - der Fakultät für Technische Wissenschaften (FTN)  abgeschlossen.  <br><br>

                Danach Studium habe ich 3 Jahre als Schichtleiter bei Stahlverarbeitungsfirma "Metalfer
                Steel Mill" gearbeitet. Zu meinem Aufgaben gehört die Produktionsplanung und -steuerung. <br><br>

                Bei einem einjährigem Praktikum bei „CNT“ habe ich praktische Erfahrung in der objektorientierten
                Programmierung mit PHP gesammelt, sowie in der Aufbau relationalen Datenbanken (MySQL), sowohl unter
                Unix/Linux als auch Windows. Ich habe auch Erfahrungen in der Entwicklung komplexen Webseiten mit 
                Datenbanken und PHP Framework Sympfony. 
                Besonders gut kann ich mit Internet Technologien HTML, CSS und jQuery umgehen. Meine Aufgaben waren
                auch Wartungvon Websites; und alte Webseiten Optimierung, damit sie auf Handys besser benutzen können. <br><br>

                Seit einem Jahre bin ich in Deutschland und habe ich erfolgreich B1 Sprachkurse absolviert.
                Zur Zeit besuche einen berufsbezogenen Deutschkurs auf dem Sprachniveau B2 bei (bfz) GmbH in München. <br><br>

                In diesen Kurs ist auch vierwöchiges Praktikum, in der Zeit vom 22.02. bis 18.03.2016 vorgesehen
                welches ich gern bei Ihnen absolvieren würde.Während des Praktikums entstehen Ihrem Unternehmen
                keine Kosten für Entgeltzahlung.<br><br>
                Ich freue mich, Sie in einem persönlichen Gespräch überzeugen zu können. <br><br>
                Mit freundlichen Grüßen  <br>
                Goran Bjelobrk  <br><br>

                Address: Weitlstr. 132 bei: Stanacic • 80995 • München  <br>
                Contact Number: (+49) 015-737963624  <br>
                E-mail: goran.bjelobrk@gmail.com</p>
            <div class="bottom"><a href="pdf/coverletter.pdf">Download</a></div>  
        </div>
        <!------------------------------------------------------------------------------------------------------------- -->	    

        <div class="win3" style="display: none; width: auto;">
            <div class="close"><div class="x"><p>&#10006;</p></div></div>
            <p class="wintittle"><?php echo $documents['doc4']; ?></p>
            <p><img src="images/zd.jpg"></p>
            <div class="bottom"><a href="pdf/">Download</a></div>
        </div>




    </div> 
</section>
<section id="screen6">

    <div class="contact"><p id="Quotes">“Computer science education cannot make anybody an expert programmer any more than studying brushes and pigment can make somebody an expert painter.”<br>
            (Eric Raymond) </p></div>
</section>
<section name="kenntnisse" id="screen3">
    <div class="title">
        <h1 class="header-text"><div class="text"><?php echo $lang['skills']; ?></div></h1>
        <div class="subtitle">
            <p><?php echo $skills['sk4']; ?></p>
        </div>
    </div>
    <div class="gallery">
        <ul>  
            <li><p><?php echo $skills['sk1']; ?></p></li>
            <li><p><?php echo $skills['sk2']; ?></p></li>
            <li><p><?php echo $skills['sk3']; ?></p></li>


        </ul>
    </div> 

</section>
<section id="screen5">

    <div class="contact">
        <h2><a class="white" href="#Kontakt">goran.bjelobrk@gmail.com</a></h2>
        <p>(+49)0157-37963624</p>

    </div>

</section>
<section name="Kontakt" id="screen4">
    <div class="main-content">


        <div class="kontakt" >

            <div class="title" id="title">
                <h1 class="header-text"><div class="text"><?php echo $lang['contact']; ?></div></h1>
                <div class="subtitle" id="hide">
                    <p><?php echo $contakt['con1']; ?></p>
                </div>
            </div>
            <?php if (isset($_SESSION['poslato'])): ?>

                <div id="good"><p><?php echo $contakt['con3']; ?></p><p id="down"><?php echo $contakt['con4']; ?></p><img src="images/check.png"></div>
                <script>
                    $(document).ready(function () {
                        $("form").hide();
                        $('#hide').hide();
                        window.location.replace("index.php#title");
                    });
                </script>
                <?php session_unset($_SESSION['poslato']); ?>
            <?php elseif (isset($_SESSION['nije'])): ?>

                <script>
                    $(document).ready(function () {
                        window.location.replace("index.php#title");
                    });
                </script>
                <p id='limitation'><?php echo $contakt['con2'] ?></p> 

                <?php session_unset($_SESSION['nije']) ?>

            <?php endif ?>
            <div class="loading"><img src="images/loading.gif"></div>
            <div id="kontakt">
                <p class="jezik"><?php echo $kontakt['jezik'] ?></p>
                <form method="post" action="slanje.php">
                    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>">

                    <label><p></p></label>
                    <span id="ime_error">*</span><br>  
                    <input id="ime" name="name" placeholder="<?php echo $kontakt['ime'] ?>">

                    <label><p></p></label>
                    <span id="email_error">*</span><br>
                    <input id="email" name="email" type="text" placeholder="<?php echo $kontakt['email'] ?>">

                    <label ><p id="sabiranje"></p></label>
                    <span id="human_error">*</span><br>
                    <input id="human" name="human"> <br>

                    <label><p></p></label>
                    <span id="poruka_error">*</span><br>
                    <textarea id="poruka" name="message" placeholder="<?php echo $kontakt['poruka'] ?>"></textarea>


                    <button id="submitkontakt" name="submit" type="submit"></button>
                </form></div>

        </div> 


        <div style="clear:both;"></div> 
    </div>
</section>
<?php
$page->endBody();
echo $page->render('inc/template.php');
