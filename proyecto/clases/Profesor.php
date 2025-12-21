<?php
    require ('clases/Asignatura.php');
    class Profesor extends Miembro{
        //Atributos
            private bool $titular;
            private Asignatura $Asignatura;
        
        //Métodos
        public function __construct(int $id, string $nombre, string $apellidos, string $email, bool $titular, Asignatura $Asignatura){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->email = $email;
            $this->titular = $titular;
            $this->Asignatura = $Asignatura;
        }
        public static function crearProfesoresDeMuestra () { 
            $a=Asignatura::crearAsignaturasDeMuestra();
               return [ new Profesor (1, "Steve", "Wozniak", "steve@apple.com", true, $a("DWES")),
                new Profesor(2, "Ada", "Lovelace", "ada@google.com", true, $a("DWEC")),
                new Profesor( 3, "Taylor", "Otwell", "taylor@laravel.com", true, $a("DIW")),
                new Profesor( 4, "Rasmus", "Lerdof", "rasmus@php.com", true, $a("DAW")),
                ];
            }
    }
    ?>