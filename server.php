<!-- PHP -->
<?php

    $message = $_GET['message'];
    $word = $_GET['censored'];

    $new_message = str_replace($word,'***', $message);

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
            <div>
                <h4>Messaggio originale:</h4>
                <p><?php echo $message; ?></p>
            </div>

            <div>
                <h4>Lunghezza messaggio originale:</h4>
                <p><?php echo strlen(trim($message)); ?></p>
            </div>

            <div>
                <h4>Messaggio censurato:</h4>
                <p><?php echo $new_message; ?></p>
            </div>

            <div>
                <h4>Lunghezza messaggio censurato:</h4>
                <p><?php echo strlen(trim($new_message)); ?></p>
            </div>
            
        </main>
    </body>
</html>