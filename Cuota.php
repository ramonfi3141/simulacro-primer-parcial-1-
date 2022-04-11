<?php
/**En la clase Cuota:
1. Se registra la siguiente información: número ,monto_cuota , monto_interes y cancelada (atributo que va a
contener un valor true, si la cuota esta paga y false en caso contrario)
2. Método constructor que recibe como parámetros los valores iniciales para los atributos: número,
monto_cuota y monto_interes definidos en la clase. Por defecto todas las cuotas deben ser generadas
como canceladas = false.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método darMontoFinalCuota() que retorna el importe total de la cuota mas los intereses
que deben ser aplicados.
 */

    class Cuota{
        //atributos
        private $numero;
        private $monto_cuota;
        private $monto_interes;
        private $cancelada =FALSE;


        public function __construct($num,$monto,$interes)
        {
            $this->numero=$num;
            $this->monto_cuota=$monto;
            $this->monto_interes=$interes;
            // $this->cancelada=$cancel;

        }
        //getter
        public function getNumero(){
            return $this->numero;
        }
        public function getMonto(){
            return $this->monto_cuota;
        }
        public function getMontInt(){
            return $this->monto_interes;
        }
        public function getCancelada(){
            return $this->cancelada;
        }
        //setter
        public function setNumero($n){
            $this->numero=$n;
        }
        public function setMonto($mont){
            $this->monto_cuota=$mont;
        }
        public function setMontInt($int){
            $this->monto_interes=$int;
        }
        public function setCancelada($can){
            $this->cancelada=$can;
        }
        //5. Implementar el método darMontoFinalCuota() que retorna el importe total de la cuota mas los intereses
        // que deben ser aplicados.
        public function darMontoFinalCuota(){

        }





        //número ,monto_cuota , monto_interes y cancelada 
        public function __toString()
        {
            return " numero: " . $this->getNumero()."\n" ." monto de cuota :". $this->getMonto()."\n". " monto de interes : ".$this->getMontInt()."\n". " cancelada : ".$this->getCancelada() ."\n";     
        
        }
    }

?>