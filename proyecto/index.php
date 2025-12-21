<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>
<body>
    <?php
        require 'clases/Miembro.php';
        require 'clases/Asignatura.php';
        require 'clases/Profesor.php';
        require 'clases/Alumno.php';
       

        $alumnos=Alumno::crearAlumnosDeMuestra();
        $profesores=Profesor::crearProfesoresDeMuestra();

        echo "<h1>Listado de alumnos</h1>";
        foreach($alumnos as $alumno) { 
            echo("<p>".$alumno."</p><br>");
        }
        echo "<h1>Listado de profesores</h1>";
        foreach($profesores as $profesor) {
            echo("<p>".$profesor."</p><br>");
        }


    ?>
</body>
</html>