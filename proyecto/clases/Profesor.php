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
               $profesores= [ new Profesor (1, "Steve", "Wozniak", "steve@apple.com", $a["0"]),
                new Profesor(2, "Ada", "Lovelace", "ada@google.com",  $a["1"]),
            new Profesor( 3, "Taylor", "Otwell", "taylor@laravel.com", $a["2"]),
                new Profesor( 4, "Rasmus", "Lerdof", "rasmus@php.com", $a["3"]),
                ];

            return $profesores;
            }
    }
    ?>