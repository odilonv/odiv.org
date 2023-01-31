<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ODIV - Contact</title>
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="preload" as="font"  href="assets/fonts/Montserrat-Regular.ttf" crossorigin>
    <link rel="preload" as="font" href="assets/fonts/Akira%20Expanded%20Demo.otf" crossorigin>


</head>

<body>
<header>
    <nav>

        <a href="https://odiv.org"><img src="assets/img/LOGO.webp" alt="Logo Odiv" CLASS="logo"></a>


        <a href="#contact" class="contact-circle"><i class="fa-solid fa-message"></i></a>
        <div class="container-corner">
            <div class="circle-menu">
                <a href="https://odiv.org/#apropos" class="links-circle">01. PRESENTATION</a>
                <a href="https://odiv.org/#competences" class="links-circle">02. COMPETENCES</a>
                <a href="https://odiv.org/#portfolio" class="links-circle">03. PORTFOLIO</a>
            </div>
            <div class="btn-circle">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>

    </nav>
</header>

<ul class="reseaux" id="reseaux-contact">
    <li><a aria-label="linkedin" href="https://www.linkedin.com/in/odilon-vidal/"><i class="fab fa-linkedin"></i></a></li>
    <li><a aria-label="github" href="https://github.com/odilonv"><i class="fab fa-github"></i></a></li>
    <li><a aria-label="behance" href="https://www.behance.net/odiv"><i class="fab fa-behance"></i></a></li>
    <li><a aria-label="twitter" href="https://www.twitter.com/odiv_v"><i class="fab fa-twitter"></i></a></li>
    <li><a aria-label="tiktok" href="https://www.tiktok.com/odiv_v"><i class="fab fa-tiktok"></i></a></li>
</ul>

<div class="rectangleleft"></div>

<div class="container">
    <section id="contact">

        <div class="contain">
            <div class="box">
                <span style="--i:1">CONTACT</span>
                <span style="--i:2">CONTACT</span>
                <span style="--i:3">CONTACT</span>
                <span style="--i:4">CONTACT</span>
                <span style="--i:5">CONTACT</span>
                <span style="--i:6">CONTACT</span>
                <span style="--i:7">CONTACT</span>
                <span style="--i:8">CONTACT</span>
                <span style="--i:9">CONTACT</span>
                <span style="--i:10">CONTACT</span>
                <span style="--i:11">CONTACT</span>
                <span style="--i:12">CONTACT</span>
                <span style="--i:13">CONTACT</span>
                <span style="--i:14">CONTACT</span>
                <span style="--i:15">CONTACT</span>
            </div>
        </div>
        <div class="text-box-contact">
            <form method="post">
                <p>
                    <label for="nom">Nom .</label>
                    <label for="prenom">. Prenom</label>
                </p>
                <p>
                    <input type="text" name="nom" id="nom" class="txtform">
                    <input type="text" name="prenom" id="prenom" class="txtform">
                </p>
                <p>Mail .</p>
                <label>
                    <input type="email" name="email" class="txtformMail">
                </label>
                <p>Message .</p>
                <label>
                    <textarea rows="9" name="message" class="txtformMsg"></textarea>
                </label>
                <div class="envoi-contact"><div class="envoiline"></div> <button class="btn-contact">Envoyer</button></div>
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


    </section>
</div>

<script src="assets/js/app.js"></script>
<script src="https://kit.fontawesome.com/e789a2f629.js" crossorigin="anonymous"></script>

</body>
</html>