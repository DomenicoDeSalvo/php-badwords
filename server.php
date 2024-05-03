<!-- PHP -->
<?php
    //Messaggio inserito dall'utente.
    $message = $_GET['message'];
    //Parola che l'utente sceglie di censurare.
    $word = $_GET['censored'];

    //La parola scelta dall'utente viene censurata e sostituita dagli asterischi. Viene tenuto il conto delle parole censurate.
    $new_message = str_replace($word,'***', $message, $count);

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
            <div class="container">   
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
                
                <div>
                    <h4>Numero parole censurate</h4>
                    <p><?php echo $count;?></p>
                </div>
            </div>
        </main>
    </body>
</html>

<!-- STYLE -->

<style>
    .container{
        max-width: 95%;
        margin: 0 auto;
    }

    .container *{
        text-align: center;
    }
</style>