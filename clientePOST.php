<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>metodo 1</h1>
        <hr>
    </header>

<main>
    <div class="container">

    <form action="servidorPOST.php" method="POST">
        <div class="form-row">
            <div class="col">
        <input type="text" class="form-control" placeholder="usuario" name="nombre">
            </div>
            <div class="col">
        <input type="text" class="form-control" placeholder="contraseña" name="password">
            </div>
        </div>
        <button type="sumbit" class="btn btn-primary mt5" name="boton"></button>
        </form>
</div>
</main>
    
</body>
</html>