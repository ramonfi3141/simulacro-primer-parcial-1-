<?php 

/**Implementar un script TestFinanciera en la cual:
1. Se crea un objeto Financiera con la siguiente información: denominación= Money, dirección = “Av. Arg
1234 ”
2. Se crea 3 objetos Prestamos con la información visualizada en la tabla:
identificación monto cantidad_de_cuotas taza _de_ interés Persona (nombre, apellido, direccion,         mail ,      telefono,    neto )
        1     50000         5               0.1                     Pepe , Florez,      Bs As 12 , dir@mail.com ,  299 444567,    40000
        2     10000         4               0.1                      Luis , Suarez,     Bs As 123 , dir@mail.com , 299 4455,    4000
        3     10000         2               0.1                      Luis , Suarez,     Bs As 123 , dir@mail.com , 299 4455,    4000

3. Invocar al método incorporarPrestamo de la Clase Financiera con cada uno de los prestamos creados
en el inciso anterior.
4. Realizar un echo del objeto Financiera creado en 1).
5. Invocar al método otorgarPrestamoSiCalifica de la Clase Financiera.
6. Realizar un echo del objeto Financiera creado en 1).
7. Invocar al método informarCuotaPagar(2) de la Clase Financiera y almacenar el valor en una variable
$objCuota.
8. Realizar un echo de la variable obtenida en el inciso anterior.
9. Invocar al método darMontoFinalCuota con el objeto obtenido en el inciso 7 y visualizar el resultado obtenido
10. Invocar al método setCancelada(true) con el objeto obtenido en el inciso 7.
11. Invocar al método informarCuotaPagar(2) de la Clase Financiera y almacenar el valor en una variable
$objCuota.
12. Realizar un echo de la variable obtenida en el inciso anterior. */

    include "Financiera.php";






?>