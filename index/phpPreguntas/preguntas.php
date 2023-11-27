<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas básicas de cálculo integral</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML'></script>
    <script>
    MathJax.Hub.Config({
        tex2jax: {
            preview: "none"
        }
    });
    </script>
    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 50px;
    }

    h1 {
        color: #007bff;
    }

    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px #000000;
    }

    p {
        margin-bottom: 5px;
    }

    input[type="email"],
    input[type="name"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }

    table {
        margin-top: 20px;
    }

    th,
    td {
        text-align: left;
        padding: 10px;
    }

    input[type="submit"] {
        width: auto;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    .centrado {
        text-align: center;
    }

    .header-logo {
        width: 100px;
        height: auto;
        border-radius: 100%;
    }

    header {
        text-align: center;
        justify-content: space-between;
        align-items: center;
        padding: 10%;
        color: white;
        padding: 10px;
        width: 100%;
        top: 0;
        display: flex;
        position: fixed;
        z-index: 1000;
    }

    .cuchau {
        background-color: rgb(5, 6, 110);
    }

    .btnheader {
        background-color: #44c767;
        border-radius: 11px;
        border: 3px solid #18ab29;
        display: inline-block;
        cursor: pointer;
        color: #ffffff;
        font-family: Arial;
        font-size: 14px;
        padding: 8px 8px;
        text-decoration: none;
    }

    .btnheader:hover {
        background-color: #5cbf2a;
    }

    .btnheader:active {
        position: relative;
        top: 1px;
    }
    </style>
</head>

<body>
    <header class=" text-white text-center py-1 cuchau" style="margin-bottom: 0%">
        <center>
            <h2>CUESTIONARIO</h2>
        </center>
    </header>
    <div class="container">
        <form method="post">
            <br>
            <center>
                <h1>Preguntas básicas de cálculo integral</h1>
            </center>
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
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="Centrado">¿Cómo se ve una integral definida?</td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R1" name="R1"
                                    value="Tiene una integral y una funcion">Tiene una integral y una funcion
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R1" name="R1"
                                    value="Tiene una integral con limites y una funcion">Tiene una integral con limites
                                y una funcion
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R1" name="R1"
                                    value="Solo es una funcion">Solo es una funcion
                            </label>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            ¿Cuál es una caracteristica de una integral indefinida?
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R2" name="R2"
                                    value='Se puede optener un valor como "5"'>Se puede optener un valor como "5"
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R2" name="R2"
                                    value="Se resta simpre la integral">Se resta simpre la integral
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R2" name="R2"
                                    value="No tiene limite de integracion">No tiene limite de integracion
                            </label>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Paso importante en la integración por cambio de variable</td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R3" name="R3"
                                    value='Obtener "v" "dv" y "dx"'>Obtener "v" "dv" y "dx"
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R3" name="R3"
                                    value="Separar los numeros reales">Separar los numeros reales
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R3" name="R3"
                                    value="Pedirle al Manu que lo resuelva">Pedirle al Manu que lo resuelva
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td>¿Qué nos conviene más hacer en las Integrales por cambio de variable?</td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R4" name="R4"
                                    value="Integrar las inmediatas">Integrar las inmediatas
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R4" name="R4"
                                    value="Factorizar la funcion">Factorizar la funcion
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R4" name="R4"
                                    value='Tratar de obtener un "ln" o una exponencial'>Tratar de obtener un "ln" o una
                                exponencial
                            </label>
                        </td>

                    <tr>
                        <th scope="row">5</th>
                        <td>¿Qué son los límites de integración?</td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R5" name="R5"
                                    value="Posibles resultados">Posibles resultados
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R5" name="R5"
                                    value="Los exponentes a aplicar a la funcion">Los exponentes a aplicar a la funcion
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R5" name="R5"
                                    value="Los valores entre los que se integra la funcion">Los valores entre los que se
                                integra la funcion
                            </label>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>La regla de Barrow es para...</td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R6" name="R6"
                                    value="Resolver todas las integrales">Resolver todas las integrales
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R6" name="R6"
                                    value="Resolver intergrales definidas">Resolver intergrales definidas
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R6" name="R6"
                                    value="Hacerme un sandwich">Hacerme un sandwich
                            </label>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Integral de una constante</td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R7" name="R7"
                                    value="La constante por 'x'">La constante por "x"
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R7" name="R7" value="Cero">Cero
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R7" name="R7"
                                    value="La constante al cuadrado">La constante al cuadrado
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">8</th>
                        <td>Integral de: <span class="math">\[x\]</span></td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R8" name="R8"><span class="math"
                                    value="frac {x}{2}">\[\frac {x}{2}\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R8" name="R8"><span class="math"
                                    value="frac {x^2}{2}">\[\frac {x^2}{2}\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R8" name="R8"
                                    value="No se puede resolver">No se puede resolver
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">9</th>
                        <td>Integral de: <span class="math">\[\frac {1}{x}\]</span></td>
                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R9" name="R9" value="frac {1}{x}"><span
                                    class="math">\[\frac {1}{x}\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R9" name="R9"
                                    value="ln \lvert x\rvert"><span class="math">\[\ln \lvert x\rvert\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R9" name="R9" value="x"><span
                                    class="math">\[x\]</span>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">10</th>
                        <td>Integral de: <span class="math">\[\cos(x)\]</span></td>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R10" name="R10" value="tan(x)"><span
                                    class="math">\[\tan(x)\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R10" name="R10"
                                    value="operatorname{sen}(x)"><span class="math">\[\operatorname{sen}(x)\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R10" name="R10"
                                    value="-ln \lvert\cos(x)\rvert "><span class="math">\[-\ln \lvert\cos(x)\rvert
                                    \]</span>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">11</th>
                        <td>Integral de: <span class="math">\[e^x\]</span></td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R11" name="R11" value="ex"><span
                                    class="math">\(ex\)</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R11" name="R11" value="e^x"><span
                                    class="math">\(e^x\)</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R11" name="R11"
                                    value="No se puede integrar">No se puede integrar
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">12</th>
                        <td>Integral de: <span class="math">\[a^x\]</span></td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R12" name="R12" value="a"><span
                                    class="math">\[a\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R12" name="R12" value="ln(a)"><span
                                    class="math">\[\ln(a)\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R12" name="R12" value="a^x ln(a)"><span
                                    class="math">\[a^x/\ln(a)\]</span>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">13</th>
                        <td>Integral de: <span class="math">\[\sec^2(x)\]</span></td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R13" name="R13" value="-cos(x)"><span
                                    class="math">\[-\cos(x)\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R13" name="R13" value="sen(x)"><span
                                    class="math">\[\operatorname{sen}(x)\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R13" name="R13" value="tan(x)"><span
                                    class="math">\[\tan(x)\]</span>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">14</th>
                        <td>Integral de: <span class="math">\[\text{cosec}^2(x)\]</span></td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R14" name="R14" value="-cotan(x)"><span
                                    class="math">\[-\text{cotan}(x)\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R14" name="R14" value="arcsen(x)"><span
                                    class="math">\[\operatorname{arcsen}(x)\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R14" name="R14" value="arccos(x)"><span
                                    class="math">\[\arccos(x)\]</span>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">15</th>
                        <td>Integral de: <span class="math">\[\frac{1}{\sqrt{1-x^2}}\]</span></td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R15" name="R15"
                                    value="operatornamearcsen(x)"><span class="math">\[\operatorname{arcsen}(x)\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R15" name="R15" value="arctan(x)"><span
                                    class="math">\[\arctan(x)\]</span>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" class="form-control" id="R15" name="R15" value="cos(x)"><span
                                    class="math">\[\cos(x)\]</span>
                            </label>
                        </td>

                    </tr>

                </tbody>
                </tbody>
            </table>

            <br><br>
            <center>
                <input type="submit" name="register" class="btn btn-primary" value="Enviar">
            </center>
            <br><br>
        </form>
    </div>

    <?php include("buscar1.php"); ?>

</body>

</html>