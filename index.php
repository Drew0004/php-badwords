<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page Form</title>
    </head>
<body>
    <h1>PHP Badwords</h1>
    <form action="./usertext.php" method="GET">
        
        <label for="user-text">
            Inserisci il tuo paragrafo
        </label>
        <input id="user-text" type="textarea" name="paragraph" placeholder="Inserisci un paragrafo..">
        
        <label for="user-text">
            Inserisci la parola da censurare
        </label>
        <input id="user-text" type="text" name="badword" placeholder="Inserisci la badword..">
        
        <button type="submit">
            Vai all'altra pagina
        </button>
    
    </form>
</body>
</html>