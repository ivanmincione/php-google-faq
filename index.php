<!-- Per prima cosa, strutturiamo un array che contiene tutte le domande e le relative risposte.
Utilizzando PHP stampiamo la lista delle FAQ all'interno della pagina html.
Una volta che siamo riusciti ad ottenere un buon risultato con array e html+php ci dedichiamo alla grafica: utilizzando Sass, stiliamo header e footer e il contenuto della pagina. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <!-- per includere il file faq.php -->
        <?php include_once "faq.php" ?>
        <title> FAQ Google</title>
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- FONTAWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <!-- STYLE -->
        <link rel="stylesheet" href="dist/app.css">

    </head>
    <body>

        <header>
            <div class="header-top">
                <div class="logo-header">
                    <div class="logo-img">
                        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="GOOGLE">
                    </div>
                    <span id="privacy-text">Privacy e termini</span>
                </div>
                <div class="menu-hamb-right">
                    <i class="fas fa-th"></i>
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <div class="list-menu">
                <ul>
                    <li>
                        <a href="#">Introduzione</a>
                    </li>
                    <li>
                        <a href="#">Norme sulla privacy</a>
                    </li>
                    <li>
                        <a href="#">Termini di servizio</a>
                    </li>
                    <li>
                        <a href="#">Tecnologie</a>
                    </li>
                    <li>
                        <a href="#">Domande frequenti</a>
                    </li>
                </ul>
            </div>

        </header>

        <!-- sezione contenente le FAQ -->
        <main>
            <div class="container">
                <?php
                foreach ($content as $value) { ?>
                    <h1>
                        <?php echo $value["quest"] ?>
                    </h1>
                    <p>
                        <?php echo $value["answer"] ?>
                    </p>
                <?php
                }
                ?>
            </div>
        </main>

        <footer>
            <div class="list-footer">
                <ul>
                    <li>
                        <a href="#">Google</a>
                    </li>
                    <li>
                        <i class="fas fa-circle"></i>
                        <a href="#">Tutto su Google</a>
                    </li>
                    <li>
                        <i class="fas fa-circle"></i>
                        <a href="#">Privacy</a>
                    </li>
                    <li>
                        <i class="fas fa-circle"></i>
                        <a href="#">Termini</a>
                    </li>
                </ul>
            </div>

            <div class="select-lang">
                <i class="fas fa-globe-americas"></i>
                <select class="" name="">
                    <option value="">Italian</option>
                    <option value="">English</option>
                    <option value="">Spanish</option>
                    <option value="">Francais</option>
                    <option value="">Chinese</option>
                </select>
            </div>
        </footer>

    </body>
</html>
