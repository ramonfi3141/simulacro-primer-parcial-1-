<?php

/**En la clase Financiera:
1. Se registra la siguiente información: denominación, dirección y la colección de prestamos otorgados.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase denominación, dirección.
3. Los métodos de acceso para cada una de las variables instancias de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método incorporarPrestamo que recibe por parámetro un nuevo préstamo.
6. Implementar el método otorgarPrestamoSiCalifica, método que recorre la lista de prestamos que no
han sido generadas sus cuotas. Por cada préstamo, se corrobora que su monto dividido la
cantidad_de_cuotas no supere el 40 % del neto del solicitante, si la verificación es satisfactoria se invoca
al método otorgarPrestamo.
7. Implementar el método informarCuotaPagar(idPrestamo) que recibe por parámetro la identificación del
préstamo, se busca el préstamo en la colección de prestamos y si es encontrado se obtiene la siguiente
cuota a pagar. El método debe retornar la referencia a la cuota. Utilizar para su implementación el método darSiguienteCuotaPagar  */

    class Financiera{
        // Se registra la siguiente información: denominación, dirección y la colección de prestamos otorgados.
        private $denominacion;
        private $direccion;
        private $colDePrestamosOtorgados;

        //2. Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase denominación, dirección.
        public function __construct($denominacion,$direccion)
        {
            $this->denominacion=$denominacion;
            $this->direccion=$direccion;
        }
        //GETTER 3. Los métodos de acceso para cada una de las variables instancias de la clase.
        public function getDenominacion(){
            return $this->denominacion;
        }
        public function getDir(){
            return $this->direccion;
        }
        public function getColPo(){
            return $this->colDePrestamosOtorgados;
        }
        //SETTER 3. Los métodos de acceso para cada una de las variables instancias de la clase.
        public function setDenominacion($deno){
            $this->denominación=$deno;
        }
        public function setDir($direccion){
            $this->dirección=$direccion;
        }
        public function setColPo($colPrestamosOt){
            $this->colDePrestamosOtorgados=$colPrestamosOt;
        }

        /**5. Implementar el método incorporarPrestamo que recibe por parámetro un nuevo préstamo. */
        public function incorporarPrestamo($nuevoPrestamo){

            $array =$this->getColPo();

            return  array_push($array,$nuevoPrestamo);

            
        }

         /**6. Implementar el método otorgarPrestamoSiCalifica, método que recorre la lista de prestamos que no
        han sido generadas sus cuotas. Por cada préstamo, se corrobora que su monto dividido la
        cantidad_de_cuotas no supere el 40 % del neto del solicitante, si la verificación es satisfactoria se invoca
        al método otorgarPrestamo. */

        public function otorgarPrestamoSiCalifica(){


        }

        /**7. Implementar el método informarCuotaPagar(idPrestamo) que recibe por parámetro la identificación del
        préstamo, se busca el préstamo en la colección de prestamos y si es encontrado se obtiene la siguiente
        cuota a pagar. El método debe retornar la referencia a la cuota. Utilizar para su implementación el método darSiguienteCuotaPagar */
        public function informarCuotaPagar($idPrestamo){




        }


        //metodos magicos 4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
        public function __toString()
        {
            return  $this->getDenominacion() . 
                    $this->getDenominacion() .      
                    $this->getDenominacion() .  "\n"   ;
        }
    }

?>