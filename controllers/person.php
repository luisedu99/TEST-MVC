<?php

  include("models/conexion.php");
 /*
  if ($conex) {
      echo "Nice";
  }
  */

  if (isset($_POST['register'])) {
    if (strlen($_POST['txtName']) >= 1 && strlen($_POST['txtLastName']) >= 1 && strlen($_POST['txtAge']) >= 1 && strlen($_POST['txtPhoneNumber']) >= 1 && strlen($_POST['txtEmail']) >= 1) {
        $name = trim($_POST['txtName']);
        $lastName = trim($_POST['txtLastName']);
        $age = trim($_POST['txtAge']);
        $phoneNumber = trim($_POST['txtPhoneNumber']);
        $email = trim($_POST['txtEmail']);

        $query = "INSERT INTO persona (nombre, apellido, edad, telefono, correo) VALUES  ('$name','$lastName', '$age', '$phoneNumber', '$email')";

        $result = mysqli_query($conex,$query);
        if ($result) {
            ?>
            <h3 class="card-panel teal lighten-2">Registrado con exito</h3>
            <?php
        }else{
            ?>
            <h3 class="card-panel red accent-2">Fallo al registrarse</h3>
            <?php
        }
    }
}

?>