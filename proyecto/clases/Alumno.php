<?php
    class Alumno extends Miembro {
        //Atributos
        private int $edad;
        private array $asignaturas;
        private bool $cursoAbonado;

        //Métodos

        public function __construct(int $id, string $nombre, string $apellidos, string $email) {
           parent::__construct($id, $nombre, $apellidos, $email);
        }
        public function abonarCurso(): void {   
            $this->cursoAbonado = true;
        }
        public function matricularseEnAsignatura($asignatura): void {
            if (in_array($asignatura, $asignatura) === true) {
                echo "Ya te has matriculado en esa asignatura, no te puedes volver a matricular de ella";
            } else {
                array_push($this->asignaturas, $asignatura);
                }
            }
        
        public static function crearAlumnosDeMuestra() {
            return [
                   new Alumno(1, "Ana", "Curevo", "acurev@cole.com", ),
                   new Alumno(2, "Pablo","Fruela", "pfruela@cole.com"),
                   new Alumno(3, "Oli", "Braña", "obraña@cole.com")
            ];
            
        }

    }
?>