<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/icons.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto con MVC y Regex</title>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/icons.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--  archivos css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/mystyle-sheet.css" media="screen,projection" />
</head>
<body>
<div class='container'>
        <div class="card-panel">
            <div id="titulo" class="center-heading">
                <h3>Formulario de registro</h3>
                <span class="center-line blue"></span>
            </div>


            <form autocomplete='off' method='POST'>
                <!-- Muestra la info personal -->
                <div class='row'>
                    <div class='input-field col s12 m4'>
                        <i class='material-icons prefix'>face</i>
                        <input id='txtName' type='text' name="txtName" min='1' max='31' class='validate' required />
                        <label for='txtName'>Ingrese su nombre</label>
                    </div>
                    <div class='input-field col s12 m4'>
                    <i class='material-icons prefix'>face</i>
                        <input id='txtLastName' type='text' name="txtLastName" min='1' max='31' class='validate' required />
                        <label for='txtLastName'>Ingrese su apellido</label>
                    </div>
                    <div class='input-field col s12 m4'>
                    <i class='material-icons prefix'>cake</i>
                        <input id='txtAge' type='text' name="txtAge" min='1' max='31' class='validate' required />
                        <label for='txtAge'>Ingrese su edad</label>
                    </div>
                    <div class='input-field col s12 m4'>
                    <i class='material-icons prefix'>contact_phone</i>
                        <input id='txtPhoneNumber' type='text' name="txtPhoneNumber" min='1' max='31' class='validate' required />
                        <label for='txtPhoneNumber'>Ingrese su telefono</label>
                    </div>
                    <div class='input-field col s12 m4'>
                    <i class='material-icons prefix'>email</i>
                        <input id='txtEmail' type='text' name="txtEmail" min='1' max='31'  class='validate' required />
                        <label for='txtEmail'>Ingrese su email</label>
                    </div>
                </div>
                <div class="row">
                    <div class='row center-align'>
                        <button type='submit' class='btn waves-effect blue' name='register'><i class='material-icons'>check</i></button>
                    </div>
                </div>
            </form>
            <?php
            include("controllers/person.php");
            ?>
            

        </div>
    </div>
    <!-- JavaScripts -->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <!-- Importar materialiaze.js -->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/myjs.js"></script>
</body>
</html>