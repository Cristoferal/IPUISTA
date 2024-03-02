<?php

namespace Model;

class Propiedad extends ActiveRecord {

    protected static $tabla = 'propiedades'; //eventos
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedores_id'];
    //protected static $columnasDB = ['id', 'titulo', 'fecha', 'imagen', 'descripcion', 'creado', 'presentadores_id'];
    
    public $id;
    public $titulo;
    public $precio; //FECHA
    public $imagen;
    public $descripcion;
    public $habitaciones; //COMENTAR
    public $wc; //COMENTAR
    public $estacionamiento; //COMENTAR
    public $creado;
    public $vendedores_id; //PRESENTADORES_ID


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? ''; //FECHA
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';  //COMENTAR
        $this->wc = $args['wc'] ?? '';  //COMENTAR
        $this->estacionamiento = $args['estacionamiento'] ?? '';  //COMENTAR
        $this->creado = date('Y/m/d');
        $this->vendedores_id = $args['vendedores_id'] ?? ''; //PRESENTADORES_ID
    }

    public function validar() {
        if (!$this->titulo) {
            self::$errores[] = "Debes de añadir un titulo";
        }

        if (!$this->precio) { //FECHA
            self::$errores[] = "El precio es obligatorio"; //FECHA
        }

        if (strlen($this->descripcion) < 50) {
            self::$errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }

        if (!$this->habitaciones) {
            self::$errores[] = "El numero de habitaciones es obligatorio";  //COMENTAR
        }

        if (!$this->wc) {
            self::$errores[] = "El numero de baños es obligatorio";  //COMENTAR
        }

        if (!$this->estacionamiento) {
            self::$errores[] = "El numero de lugares de estacionamiento son obligatorios";  //COMENTAR
        }

        if (!$this->vendedores_id) {
            self::$errores[] = "Elige un vendedor";  //PRESENTADORES_ID
        }

        if(!$this->imagen) {
        self::$errores[] = 'La Imagen de la propiedad es obligatoria';
        }

        return self::$errores;

    }
}