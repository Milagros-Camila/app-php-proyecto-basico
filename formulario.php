<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="card" style="width: 18rem;">
<div class="card-body">
    <h6 class="container">Formulario  de Milagros Camila</h6>
    <hr>
    
    <form  method="POST" action="" >
        <div class="mb-3">
            <label for="numero" class="numero">Ingrese un número:</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="numero" placeholder="123456">
        </div>
        
        <button type="submit" class="btn btn-info">Enviar</button>
        <hr>
    </form>
    </div>
</div>
    <?php
    if (isset($_GET["fruta"])){
        echo $_GET ["fruta"]."<br>";
    }
    if (isset($_GET ["precio"])){
        echo $_GET ["precio"];
    }
    echo $_POST ["numero"];
    ?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<!-- //POST captura datos de un formulario
    //GET captura datos de la URL
    //codigo PHP
    //echo $_GET ["fruta"]."</br>";
    //echo $_GET ["fruta"];
    //IMPRIMIR PRECIO
    //echo $_GET ["precio"];
    // if (isset($_GET ["precio"])){
    //     echo"Existe la variable PRECIO";
    // }else 
    // echo "NO existe la variable PRECIO";

    //IMPRIMIR FRUTA
    //echo $_GET ["fruta"];
    // if (isset($_GET ["fruta"])){
    //     echo"Existe la variable FRUTA";
    // }else 
    // echo "NO existe la variable FRUTA"; -->