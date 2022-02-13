<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de personas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
               <td>ID</td>
               <td>NOMBRE</td>
               <td>APELLIDO</td> 
               <td>EDAD</td>
               <td>TELEFONO</td>
               <td>CORREO</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($personas as $person){
                echo "<tr>";
                echo "<td>".$person['id']."</td>";
                echo "<td>".$person['nombre']."</td>";
                echo "<td>".$person['apellido']."</td>";
                echo "<td>".$person['edad']."</td>";
                echo "<td>".$person['telefono']."</td>";
                echo "<td>".$person['correo']."</td>";                
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>    
</body>
</html>