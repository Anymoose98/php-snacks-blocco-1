<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack 2</title>
</head>
<body>
<div class="container">
        <div class="row">
            <form method="GET" >
                <div class="col-12 d-flex my-3">

                    <div class="col-6 m-3">
                        <input type="text" name="nome" id="nome" class="form-control my-2" placeholder="Inserisci il nome" required>
                        <input type="email" name="email" id="email" class="form-control my-2" placeholder="Inserisci email" required>
                        <input type="number" name="età" id="età" class="form-control my-2" placeholder="Inserisci età" required>  
                    </div>

                    <div class="col-6 m-3">
                        <h3>Inserisci i dati richiesti ricordando che:</h3>
                        <h5>Name deve avere minimo 3 caratteri</h5>
                        <h5>Mail contenga un punto e una chiocciola</h5>
                        <h5>Età sia un numero</h5>
                    </div>                    

                </div>

                <div class="col-12 text-center">
                    <button type="submit" >invia</button>
                </div>

            </form>                    
</body>
</html>