<?php

    $paragraph = $_GET["paragraph"];
    $badword = $_GET["badword"];
    $censoredParagraph = str_replace($badword, '***', $paragraph);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User texts</title>
    </head>
<body>
    <h1>Area testo utente</h1>
    
    <p><strong> Il paragrafo iniziale è: </strong> 
        <?php echo $paragraph ?> 
    </p>
    
    <h5>La lunghezza del paragrafo è 
        <?php echo strlen($paragraph) ?> 
    </h5>
    
    <h3> La parola da censurare è: 
        <?php echo $badword ?> 
    </h3>
    
    <p><strong>Il paragrafo censurato è: </strong> 
        <?php echo $censoredParagraph ?> 
    </p>

    <h5>La lunghezza del paragrafo è 
        <?php echo strlen($censoredParagraph) ?> 
    </h5>
</body>
</html>