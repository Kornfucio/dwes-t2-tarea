<?php 
    class Asignatura {
        private int $id;
        private string $nombre;
        private int $creditos;


        public function __construct(int $id, string $nombre, int $creditos) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->creditos = $creditos;
        }
        public static function crearAsignaturasDeMuestra(): array{

            return [
                $DWES=new Asignatura (1,"DWES",7),
                $DWEC=new Asignatura(2,"DWEC",6),
                $DIW=new Asignatura(3,"DIW",4),
                $DAW=new Asignatura(4,"DAW",4)
            ];
               
            }
        }


?>