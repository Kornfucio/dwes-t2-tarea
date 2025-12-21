<?php
class Alumno extends Miembro
{
    //Atributos
    private int $edad;
    private array $asignaturas;
    private bool $cursoAbonado;

    //Métodos

    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $edad)
    {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
        //$this->asignaturas = $asignaturas;
        //$this->cursoAbonado = $cursoAbonado;
    }
    public function abonarCurso(): void
    {
        $this->cursoAbonado = true;
    }
    public function matricularseEnAsignatura($asignatura): void
    {
        if (in_array($asignatura, $this->asignaturas) === true) {
            echo "Ya te has matriculado en esa asignatura, no te puedes volver a matricular de ella";
        } else {
            array_push($this->asignaturas, $asignatura);
        }
    }

    public static function crearAlumnosDeMuestra(): array
    {
        $alumnos = [
            new Alumno(1, "Laura", "Martinez", "laura.martinez@email.com",  22),
            new Alumno(2, "Sergio", "Lopez", "sergio.lopez@email.com", 25),
            new Alumno(3, "Carlos", "García", "carlos.garcia@email.com",24),
            new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com",23),
            new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com",21),
            new Alumno(6, "David", "Rodriguez", "david.rodriguez@email.com",26),
            new Alumno(7, "Lucía", "Jimenez", "lucia.jimenez@email.com",20),
            new Alumno(8, "Jorge", "Perez", "jorge.perez@email.com", 22),
            new Alumno(9, "Elena", "Romero", "elena.romero@email.com",23),
            new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com",24)
        ];
        return $alumnos;
    }
}
