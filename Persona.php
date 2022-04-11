<?php

/**En la clase Persona:
1. Se registra la siguiente información: nombre, apellido, dni, direccion, mail, telefono y neto.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase. */

class Persona{
    private $nombre; 
    private $apellido;
    private $dni;
    private $direccion;
    private $mail;
    private $telefono;
    private $neto;



    private $numero;
    
    function __construct($nombre,$apellido,$dni,$direccion,$mail,$telefono,$neto){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->tipo=$dni;
        $this->numero=$direccion;
        $this->numero=$mail;
        $this->numero=$telefono;
        $this->numero=$neto;

    }
    
    
    //setter
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setApellido($apellido){
        $this->apellido=$apellido;
    }
    
    function setDni($dni){
        $this->dni=$dni;
    }
    
    function setDire($direccion){
        $this->direccion=$direccion;
    }
    function setMail($mail){
        $this->mail=$mail;

    }function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    function setNeto($neto){
        $this->neto=$neto;
    }
    //getter $nombre,$apellido,$dni,$direccion,$mail,$telefono,$neto
    function getNombre(){
        return $this->nombre;
    }
    function getApellido(){
        return $this->apellido;
    }
    
    function getDni(){
        return $this->dni;
    }
    
    function getDire(){
        return $this->direccion;
    }
    
    function getMail(){
        return $this->mail;
    }
    function getTelefono(){
        return $this->telefono;
    }
    function getNeto(){
        return $this->neto;
    }    
    function __toString(){
        return " nombre : " . $this->getNombre()."\n" ." apellido :". $this->getApellido()."\n". " dni : ".$this->getDni()."\n". " direccion : ".$this->getDire() ."\n"." mail :".$this->getMail()."\n"." telefono : ".$this->getTelefono(). "\n"." neto : ". $this->getNeto() . "\n";
    }
    
}
?>