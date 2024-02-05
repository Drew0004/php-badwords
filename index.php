<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page Form</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
<body class="bg-dark">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="text-white text-center my-4">PHP Badwords</h1>
            <div class="col-6">
                <form action="./usertext.php" method="GET">
                    <div>
                        <label class="text-white mb-2" for="user-text">
                            Inserisci il tuo paragrafo
                        </label>
                    </div>
                        <input class="mb-4 w-100 form-control" id="user-text" type="textarea" name="paragraph" placeholder="Inserisci un paragrafo.." style="height: 100px">
                    <div>
                        <label class="text-white mb-2" for="user-text">
                            Inserisci la parola da censurare
                        </label>
                    </div>
                        <input class="mb-4 w-100 form-control" id="user-text" type="text" name="badword" placeholder="Inserisci la badword..">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">
                            Vai all'altra pagina
                        </button>
                    </div>
                
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>