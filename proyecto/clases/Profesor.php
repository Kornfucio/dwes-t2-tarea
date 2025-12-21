<?php
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
               return [ new Profesor (1, "Steve", "Wozniak", "steve@apple.com", true, $DWEC),
                new Profesor(2, "Ada", "Lovelace", "ada@googlecom", true, 2),
                new Profesor( 3, "Taylor", "Otwell", "taylor@laravel.com", true, 3),
                new Profesor( 4, "Rasmus", "Lerdoff", "rasmus@php.com", true, 4),
                ];
            }
    }
    ?>