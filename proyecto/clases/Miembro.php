<?php 
    abstract class  Miembro {
        protected int $id;
        protected string $nombre;
        protected string $apellidos;
        protected string $email;

        public function __construct(int $id, string $nombre, string $apellidos, string $email) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->email = $email;
        }

        public function getId(): int {
            return $this->id;
        }
        public function getNom(): string {      
            return $this->nombre;
        }

        public function getApellidos(): string {
            return $this->apellidos;
        }

        public function getEmail(): string {
            return $this->email;
        }

        public function setId($nuId): void {
            $this->id = $nuId;
        }

         public function setNombre($nuNombre): void {
            $this->nombre = $nuNombre;
        }

         public function setApellidos($nuApellidos): void {
            $this->apellidos= $nuApellidos;
        }

         public function setMail($nuMail): void {
            $this->email= $nuMail;
        }

        public function __toString(): string {  
            return sprintf("ID: %d | Nombre: %s %s | Email: %s", $this->id, $this->nombre, $this->apellidos, $this->email);
        }


    }
    ?>