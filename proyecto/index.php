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


    $alumnos = Alumno::crearAlumnosDeMuestra();
    $profesores = Profesor::crearProfesoresDeMuestra();
    $asignaturas = Asignatura::crearAsignaturasDeMuestra();

    echo "<h1>Alumnos</h1>";
    foreach ($alumnos as $alumno) {
        echo ("<ul><li>" . $alumno . "</ul></li>");
    }
    echo "<h1>Profesores</h1>";
    foreach ($profesores as $profesor) {
        echo ("<ul><li>" . $profesor . "</ul></li>");
    }

    echo "<h1>Asignaturas</h1>";
    foreach ($asignaturas as $asignatura) {
        echo ("<ul><li>" . $asignatura . "</ul></li>");
    }

    echo "<h1>Alumnos <=23 años</h1>";
    $alumnosMenores = array_filter($alumnos, function ($alumno) {
        return $alumno->edad <= 23;
    });

    foreach ($alumnosMenores as $alumno) {
        echo ("<ul><li>" . $alumno . "</ul></li>");
    }
    $alumnos[0]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularseEnAsignatura($asignaturas[1]);
    $alumnos[2]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[2]->matricularseEnAsignatura($asignaturas[2]);
    $alumnos[3]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularseEnAsignatura($asignaturas[1]);
    $alumnos[4]->matricularseEnAsignatura($asignaturas[2]);
    $alumnos[5]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[6]->matricularseEnAsignatura($asignaturas[1]);
    //$alumnos[6]->matricularseEnAsignatura($asignaturas[1]);
    /*Se comprueba que muestra el mensaje y no permite la doble matriculación*/
    $alumnos[7]->matricularseEnAsignatura($asignaturas[2]);
    $alumnos[8]->matricularseEnAsignatura($asignaturas[1]);
    $alumnos[9]->matricularseEnAsignatura($asignaturas[0]);

    echo "<h1>Alumnos con al menos dos asignaturas</h1>";
    $alumnosDosAsignaturas = array_filter($alumnos, function ($alumno): bool {
        return count($alumno->asignaturas) >= 2;
    });
    foreach ($alumnosDosAsignaturas as $alumno) {
        echo ("<ul><li>" . $alumno . "</ul></li>");
    }

    echo "<h1>Asignaturas con algún alumno matriculado</h1>";
    $asignaturasConAlumnos = [];
    foreach ($alumnos as $alumno) {
    foreach ($alumno->asignaturas as $asignatura) {
        //usamos el nombre de la asignatura como clave única
        $clave=$asignatura->nombre;
        if (!isset($asignaturasConAlumnos[$clave])) {
       
            $asignaturasConAlumnos[$clave] = $asignatura;
        }
    }   
    }
    foreach ($asignaturasConAlumnos as $asignatura) {
            echo "<ul><li>".$asignatura."</li></ul>";
        }
    ?>
</body>

</html>