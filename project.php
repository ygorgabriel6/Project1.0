<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>PEDROGAY</title>
    </head>
    <body>
        <section>
            <h1>IMPAR OU PAR?</h1>

            <?php
for ($x = 1; $x <= 1000; $x++) {
    if ($x % 2 == 0) {
        echo $x." e um numero par<br>";
    } else {
        echo $x." e um numero impar<br>";
    }
}
?>
        </section>
    </body>
</html>