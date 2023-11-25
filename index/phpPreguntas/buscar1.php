<?php 
include("con_db1.php");

if (isset($_POST["register"])){
    if (strlen($_POST['CorreoP']) >= 1 && strlen($_POST['NombreP']) >= 1) {

            $Correo = trim($_POST['CorreoP']);
            $Nombre = trim($_POST['NombreP']);
            $R1 = trim($_POST['R1']);
            $R2 = trim($_POST['R2']);
            $R3 = trim($_POST['R3']);
            $R4 = trim($_POST['R4']);
            $R5 = trim($_POST['R5']);
            $R6 = trim($_POST['R6']);
            $R7 = trim($_POST['R7']);
            $R8 = trim($_POST['R8']);
            $R9 = trim($_POST['R9']);
            $R10 = trim($_POST['R10']);
            $R11 = trim($_POST['R11']);
            $R12 = trim($_POST['R12']);
            $R13 = trim($_POST['R13']);
            $R14 = trim($_POST['R14']);
            $R15 = trim($_POST['R15']);
            
            $consulta = "INSERT INTO respuestas(CorreoP, NombreP, R1, R2, R3, R4, R5, R6, R7, R8, R9, R10, R11, R12, R13, R14, R15) 
            VALUES ('$Correo','$Nombre','$R1','$R2','$R3','$R4','$R5','$R6','$R7','$R8','$R9','$R10','$R11','$R12','$R13','$R14','$R15')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                ?>
                <h3 class="ok">¡Datos subidos correctamente!</h3>
                <?php
            } else {
                ?>
                <h3 class="bad">¡Ups a ocurrido algo!</h3>
                <?php
            }
    } else {
        ?>
        <h3 class="bad">¡Porfavor completa los campos!</h3>
        <?php
    }      
}

?>
