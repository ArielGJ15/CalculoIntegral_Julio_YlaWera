<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML'></script>
  <script>
    MathJax.Hub.Config({
      tex2jax:
      {
        preview: "none"
      }
    });
  </script>
</head>
<body>

<div class="container">
    <form method="post">
        <br>
            <center><h1>Preguntas básicas de cálculo integral</h1></center>
        <br>

        <div class="mb-3">
            <p>Correo Electrónico</p>
            <input type="email" class="form-control" id="CorreoP" name="CorreoP">
        </div>
        <div class="mb-3">
            <p>Nombre Completo</p>
            <input type="name" class="form-control" id="NombreP" name="NombreP">
        </div>
  
    <table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <th scope="row">1</th>
      <td>¿Cómo es una integral definida?</td>
      <td><input type="text" class="form-control" id="R1" name="R1"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>¿Cómo es una integral indefinida?</td>
      <td><input type="text" class="form-control" id="R2" name="R2"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>¿Qué es la integración por cambio de variable?</td>
      <td><input type="text" class="form-control" id="R3" name="R3"></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>¿Qué es la integración por trigonometría?</td>
      <td><input type="text" class="form-control" id="R4" name="R4"></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>¿Qué es una integral impropia?</td>
      <td><input type="text" class="form-control" id="R5" name="R5"></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>¿Qué es una integral doble?</td>
      <td><input type="text" class="form-control" id="R6" name="R6"></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>¿Qué es una integral triple?</td>
      <td><input type="text" class="form-control" id="R7" name="R7"></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>¿Qué es una integral de línea?</td>
      <td><input type="text" class="form-control" id="R8" name="R8"></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>¿Qué es una integral de superficie?</td>
      <td><input type="text" class="form-control" id="R9" name="R9"></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>¿Qué es una integral elíptica?</td>
      <td><input type="text" class="form-control" id="R10" name="R10"></td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>¿Qué es el teorema fundamental del cálculo?</td>
      <td><input type="text" class="form-control" id="R11" name="R11"></td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>¿Qué es la integración por fracciones parciales?</td>
      <td><input type="text" class="form-control" id="R12" name="R12"></td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>¿Qué es una regla de integración?</td>
      <td><input type="text" class="form-control" id="R13" name="R13"></td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>¿Qué es la integración por partes?</td>
      <td><input type="text" class="form-control" id="R14" name="R14"></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>¿Qué es la sustitución?</td>
      <td><input type="text" class="form-control" id="R15" name="R15"></td>
    </tr>
  
    </tbody>
    </table>

        <br><br>
            <center><input type="submit" name="register" class="btn btn-primary" value="Enviar"><center>
        <br><br>

    </form>
</div>


<?php 
include("buscar1.php");
?>

</body>
</html>