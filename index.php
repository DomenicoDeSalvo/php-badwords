<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <main>
            <div class="container"> 
                <form action="./server.php">
                    <div>
                        <label for="message">Messaggio:</label>
                        <br>
                        <textarea name="message" id="message" rows="1" cols="50" placeholder="Inserire un messaggio"></textarea>
                    </div>
                    
                    <div>
                        <label for="censored">Parola da censurare:</label>
                        <br>
                        <input type='text'  name="censored" id="censored" placeholder="Parola da censurare"></textarea>
                    </div>        
                    <button>Invia</button>
                </form>
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

    div, button{
        margin: 12px 0;
    }

    label{
        font-weight: 700;
    }
</style>