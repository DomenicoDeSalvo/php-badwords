<!-- PHP -->
<?php

    $message = $_GET['message'];

?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Risposta</title>
    </head>
    <body>
        <main>
            <h2>Il tuo messaggio:</h2>
            <p><?php echo $message; ?></p>
        </main>
    </body>
</html>