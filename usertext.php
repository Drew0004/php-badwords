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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
<body class="bg-dark">
    <div class="container">
        <div class="border rounded-4 p-5 my-5">
            <h1 class="text-center text-white mb-5 fw-bold">Area testo utente</h1>
            
            <p class="text-white"><strong> Il paragrafo iniziale è: </strong> 
                <?php echo $paragraph ?> 
            </p>
            
            <h5 class="text-center text-white my-3">La lunghezza del paragrafo è:
                <?php echo strlen($paragraph) ?> 
            </h5>
        </div>
        
        <div class="border rounded-4 p-5 my-5">
            <h3 class="text-white text-center mb-5 fw-bold"> La parola da censurare è: 
                <?php echo $badword ?> 
            </h3>
            
            <p class="text-white"><strong>Il paragrafo censurato è: </strong> 
                <?php echo $censoredParagraph ?> 
            </p>
        
            <h5 class="text-center text-white my-3">La lunghezza del paragrafo è:
                <?php echo strlen($censoredParagraph) ?> 
            </h5>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>