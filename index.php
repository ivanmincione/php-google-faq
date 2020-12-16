<!-- Per prima cosa, strutturiamo un array che contiene tutte le domande e le relative risposte.
Utilizzando PHP stampiamo la lista delle FAQ all'interno della pagina html.
Una volta che siamo riusciti ad ottenere un buon risultato con array e html+php ci dedichiamo alla grafica: utilizzando Sass, stiliamo header e footer e il contenuto della pagina. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> FAQ Google</title>
        <link rel="stylesheet" href="dist/app.css">
        <!-- per includere il file faq.php -->
        <?php include_once "faq.php" ?>

    </head>
    <body>

        <header>

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

        </footer>

    </body>
</html>
