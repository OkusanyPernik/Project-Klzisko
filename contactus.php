<?php 
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Šaľa, na ľad! - Zimný štadión Šaľa, jeho súčasnosť a budúcnosť</title>
    <meta name="description" content="Oficiálna webová stránka pre šalianske klzisko. Nájdete tu všetky dôležité informácie týkajúce sa prevádzky,rekonštrukcie a budúcnosti klziska."/>
    <meta name="keywords" content="klzisko, šaľa, hokejový klub">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Šaľa, na ľad! - Zimný štadión Šaľa, jeho súčasnosť a budúcnosť">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://salanalad.sk">
    <meta property="og:image" content="https://salanalad.sk/images/hero-photo.jpg">
    <meta property="og:description" content="Oficiálna webová stránka pre šalianske klzisko. Nájdete tu všetky dôležité informácie týkajúce sa prevádzky,rekonštrukcie a budúcnosti klziska.">
    <meta property="og:site_name" content="Šaľa, na ľad!">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Šaľa, na ľad! - Zimný štadión Šaľa, jeho súčasnosť a budúcnosť">
    <meta name="twitter:description" content="Oficiálna webová stránka pre šalianske klzisko. Nájdete tu všetky dôležité informácie týkajúce sa prevádzky,rekonštrukcie a budúcnosti klziska.">
    <meta name="twitter:site" content="https://salanalad.sk">
    <meta name="twitter:image" content="https://salanalad.sk/images/hero-photo.jpg">
    <meta name="twitter:creator" content="@yuecma">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico" />
    <link rel="icon" type="image/png" href="./images/favicon.png" />
</head>
<body>
    <noscript id="deferred-styles">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </noscript>
    <script>
        var loadDeferredStyles = function() {
            var addStylesNode = document.getElementById("deferred-styles");
            var replacement = document.createElement("div");
            replacement.innerHTML = addStylesNode.textContent;
            document.body.appendChild(replacement);
            addStylesNode.parentElement.removeChild(addStylesNode);
        };
        var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
            window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
        if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
        else window.addEventListener('load', loadDeferredStyles);
    </script>
    <nav class="navbar navbar-expand-lg navbar-light custom-color" id="navbar">
        <a class="navbar-brand" href="index.html" title="Odkaz na úvodnú stránku">Šaľa na ľad!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" title="Odkaz na úvodnú stránku" href="index.html">Úvod </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Odkaz na stránku o nás" href="whoweare.html">Kto sme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Odkaz na stránku s dennikom"href="diary.html">Dennik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Odkaz na stránku s galériou"href="gallery.html">Galéria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Odkaz na stránku so sponzormi"href="supportus.html">Podporujú nás</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" title="Odkaz na stránku s kontaktom" href="contactus.php">Kontaktujte nás <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <form class="container" accept-charset="ISO-8859-1" method="post">
        <h2 class="text-center mt-3">Kontaktujte nás</h2>
        <p class="pt-2 text-center">* Všetky polia sú povinné </p>
        <div class="form-row">
            <div class="col">
                <label for="name">Meno</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Meno">
            </div>
            <div class="col">
                <label for="surname">Priezvisko</label>
                <input type="text" id="surname" name="surname" class="form-control" placeholder="Priezvisko">
            </div>
        </div>
        <div class="form-group mt-2">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="message">Správa</label>
            <textarea name="message" type="text" class="form-control" id="message" rows="6"></textarea>
        </div>
       <button type="submit" name="submit" value="Submit" class="btn-custom btn-lg">Odoslať</button> 
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if ($name && $surname && $email && $message) {
            $receiver = "salanalad@salanalad.sk";
            $subject = 'Správa z www.salanalad.sk';
            $from = 'salanalad@salanalad.sk';
            $mailcontent = 	 'Meno: '.$name."\n"
            .'Priezvisko: '.$surname."\n"
            .'E-mail: '.$email."\n"
            .'Správa: '.$message."\n\n"
            ."Vám poslal prostredníctvom webového formulára nasledujúcu správu:\n\n".$msg;
            $headers = 	
            'From: salanalad@salanalad.sk' . "\r\n" . "Content-type: text/html; charset=utf-8\n";
            'Reply-To: '.$mail. "\r\n";                    
            mail($receiver , $subject, $mailcontent, $headers);   
        }
    }
    ?>
    <div class="text-center container mt-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.3972796669464!2d17.868875115720765!3d48.16042397922527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b6d012fb0f62f%3A0x5a4c8b5d666b1747!2zVsOhaG92w6EgMTAwNi8xNywgOTI3IDAxIMWgYcS-YQ!5e0!3m2!1sen!2ssk!4v1542037487335" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>