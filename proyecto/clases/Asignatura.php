<?php 
    class Asignatura {
        public int $id;
        public string $nombre;
        public int $creditos;


        public function __construct(int $id, string $nombre, int $creditos) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->creditos = $creditos;
        }
        public static function crearAsignaturasDeMuestra(): array{

            $asignaturas= [
                $DWES=new Asignatura (1,"DWES",7),
                $DWEC=new Asignatura(2,"DWEC",6),
                $DIW=new Asignatura(3,"DIW",4),
                $DAW=new Asignatura(4,"DAW",4)
            ];
            return $asignaturas; 
            }

        //Añado el método toString a la clase para poder obtener la información por pantalla
        public function __toString()
        {
            return sprintf("Nombre: %s, Créditos %s", $this->nombre, $this->creditos);
        } 

    }


?>