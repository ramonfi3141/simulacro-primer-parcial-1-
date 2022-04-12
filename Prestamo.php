<?php

/**En la clase Prestamo:
1. Se registra la siguiente información: identificación, código del electrodoméstico, fecha otorgamiento,
monto, cantidad_de_cuotas, taza de interés, la colección de cuotas y la referencia a la persona que solicito el préstamo.
2. Método constructor que recibe como parámetros los siguientes valores: identificación, monto, cantidad
de cuotas, taza de interés y la referencia a la persona que solicito el préstamo. El constructor debe asignar los valores recibidos a las variables instancias que corresponda.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método privado calcularInteresPrestamo(numCuota) que recibe por parámetro el numero de la cuota y calcula el importe del interés sobre el saldo deudor.
Por ejemplo si el préstamo tiene 5 cuotas, el monto total = 50000 y el interés 0.1% entonces el monto del
interés sobre saldo deudor que debe calcularse para cada una de las cuotas deben ser los siguientes:
 interés cuota 1: 50 000 * 0.01 = 500
 interés cuota 2: ( 50 000- (50 000 /5) ) * 0.01 = 400
 interés cuota 3: ( 50 000 - ( (50 000 /5)*2) ) * 0.01 = 300
 interés cuota 4: (50 000 - ( (50 000 /5)*3 )) * 0.01 = 200
 interés cuota 5: (50 000 - ( (50 000 /5)*4 )) * 0.01 = 100
6. Implementar el método otorgarPrestamo que setea la variable instancia fecha otorgamiento, con la
fecha actual (puede utilizar el valor retornado por la función de PHP getdate()) y genera cada una de las
cuotas dependiendo el valor almacenado en la variable instancia “cantidad_de_cuotas” y monto. El
importe total de la cuota debe ser calculado de la siguiente manera: (monto / cantidad_de_cuotas )
y el monto correspondiente al interés debe ser el valor retornado por el método calcularInteresPrestamo(numeroCuota) implementado en el inciso anterior.
interes cuota numCuota = ( monto - (( monto/ cantidad_de_cuotas) * numCuota -1)) * taza_de_interés/0.01


 FACULTAD DE INFORMATICA
CÁTEDRA INTRODUCCIÓN POO
7. Implementar el método darSiguienteCuotaPagar método que retorna la referencia a la siguiente cuota
que debe ser abonada de un préstamo, si el préstamo tiene todas sus cuotas canceladas retorna null.
 */

class Prestamo{
    
    private $indentificacion;
    private $codE;
    private $fechaOtorga ;
    private $monto;
    private $cantCuotas;
    private $tazaInt;
    private $arrayCuotas ;
    private $cliente ;
    
    public function __construct($indentificacion,$monto ,$cantCuotas ,$tazaInt ,$cliente ){
        
       $this->indentificacion=$indentificacion;
       $this->monto=$monto;
       $this->cantCuotas=$cantCuotas;
       $this->tazaInt=$tazaInt;
       $this->cliente=$cliente;
    
    }
    //getter
    public function getIndenti(){
        return $this->indentificacion;
    }
    public function getCodigo(){
        return $this->codE;
    }
    public function getFechaOtorgamiento(){
        return $this->fechaOtorga;
    }
    public function getMonto(){
        return $this->monto;
    }
    public function getCantidadCuotas(){
        return $this->cantCuotas;
    }
    public function getTazaI(){
        return $this->tazaInt;
    }
    public function getAcuotas(){
        return $this->arrayCuotas;
    }
    public function getCliente(){
        return $this->cliente;
    }
    // setter 

    public function setIndenti($ind){
        $this->indentificacion=$ind;
    }
    public function setCodigo($cod){
        $this->codE=$cod;
    }
    public function setFechaOtorgamiento($fOtorga){
        $this->fechaOtorga=$fOtorga;
    }
    public function setMonto($m){
        $this->monto=$m;
    }
    public function setCantidadCuotas($cantidadDcuotas){
        $this->cantCuotas=$cantidadDcuotas;
    }
    public function setTazaI($tI){
        $this->tazaInt=$tI;
    }
    public function setAcuotas($ColeccionDcuotas){
        $this->arrayCuotas=$ColeccionDcuotas;
    }
    public function setCliente($client){
        $this->cliente=$client;
    }

    public function calcularInteresPrestamo($numCuota) {


    }



    //metodo magico
    public function __toString()
    {
        return $this->getIndenti() . "\n" .
               $this->getCodigo()  .  "\n" .
               $this->getFechaOtorgamiento() . "\n" .
               $this->getMonto() . "\n" .
               $this->getCantidadCuotas() . "\n" .
               $this-> getTazaI() . "\n" .
               $this->getAcuotas() . "\n" .
               $this->getCliente() . "\n"    ;
    }




    
}
    
?>