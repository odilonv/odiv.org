<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact | ODIV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/e789a2f629.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link href="http://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet">

  </head>
<body>
<header>
    <nav>

        <a href="https://odiv.org/" class="active">
            <img src="img/LOGO.png" alt="LOGO" CLASS="logo"></a>
        <!--<ul class="navigation">
            <li><a href="#about">01. QUI SUIS-JE ?</a></li>
            <li><a href="#skills">02. COMPETENCES</a></li>
            <li><a href="#portfolio">03. MON TRAVAIL</a></li>
            <li><a href="#contact">04. CONTACT</a></li>
        </ul>-->
        <div class="container-corner">
            <div class="circle-menu">
                <a href="https://odiv.org/#about" class="links-circle">01. PRESENTATION</a>
                <a href="https://odiv.org/#skills" class="links-circle">02. COMPETENCES</a>
                <a href="https://odiv.org/#portfolio" class="links-circle">03. PORTFOLIO</a>

            </div>
            <div class="btn-circle">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>

        <div class="contact-corner">
            <a href="contact">
                <div class="contact-circle">
                    CONTACT <i class="fa-solid fa-message"></i>
                </div></a>
        </div>



    </nav>
</header>


<div class="container">
    <section id="contact">
            <label id="contactlab"><label id="contactlabe">Hey</label>, <br> comment puis-je t'aider ?</label>
            <div class="text-container">

                <div class="rectangleleft"></div><div class="rectangleright"></div>
                <div class="arcdecercleL"></div>
                <ul class="reseaux" id="reseaux">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>

                <div class="text-box">
                    <form method="post">
                    <p><label>Nom .</label>

                        <label>. Prenom</label></p>
                        <p><input type="text" name="nom" class="txtform"><input type="text" name="prenom" class="txtform"></p>
                    <p>Mail .</p>
                    <input type="email" name="email" class="txtformMail">
                    <p>Message .</p>
                    <textarea rows="9" name="message" class="txtformMsg"></textarea>
                    <button class="contact-circle">Envoyer</button>
                    </form>
                    <?php
                        if (isset($_POST['message'])) {
                            $entete  = 'MIME-Version: 1.0' . "\r\n";
                            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                            $entete .= 'From: contact@odiv.org' . "\r\n";
                            $entete .= 'Reply-to: ' . $_POST['email'];

                            $message = '<h1>Message envoyé depuis la page Contact de odiv.org</h1>
                                        <p><b>Email : </b>' . $_POST['email'] . '<br>
                                            <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

                                        $retour = mail('odilon.vidal@icloud.com', 'Envoi depuis page Contact', $message, $entete);
                                        if($retour)
                                        echo '<label class="alert"> Votre message a bien ete envoye.</label>';
                                        }
                    ?>
                </div>


        </div>
    </section>
    </div>

<script src="app.js"></script>
</body>
</html>