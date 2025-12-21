<?php
    //require ('clases/Asignatura.php');
    class Profesor extends Miembro{
        //Atributos
            private bool $titular;
            private ?Asignatura $asignatura=null;
        
        //Métodos
        public function __construct(int $id, string $nombre, string $apellidos, string $email,  ?Asignatura $asignatura){
            parent::__construct($id, $nombre, $apellidos, $email);
            
            $this->asignatura = $asignatura;
        }
        public static function crearProfesoresDeMuestra () { 
            $a=Asignatura::crearAsignaturasDeMuestra();
               $profesores= [ new Profesor (1, "Steve", "Wozniak", "steve@apple.com", $a["DWES"]),
                new Profesor(2, "Ada", "Lovelace", "ada@google.com",  $a["DWEC"]),
            new Profesor( 3, "Taylor", "Otwell", "taylor@laravel.com", $a["DIW"]),
                new Profesor( 4, "Rasmus", "Lerdof", "rasmus@php.com", $a["DAW"]),
                ];

            return $profesores;
            }
    }
    ?>