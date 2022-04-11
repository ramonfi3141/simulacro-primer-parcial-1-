<?php
    include "Persona.php";

    //$nombre,$apellido,$dni,$direccion,$mail,$telefono,$neto
    $nuevaPersona= new Persona("","",0,"","",0,0);
    
        echo "nombre :\n";
        $nuevaPersona->setNombre(trim(fgets(STDIN))) ;
        echo "apellido :\n";
        $nuevaPersona->setApellido(trim(fgets(STDIN))) ;
        echo "dni :\n";
        $nuevaPersona->setDni(trim(fgets(STDIN))) ;
        echo "direccion :\n";
        $nuevaPersona->setDire(trim(fgets(STDIN))) ;
        echo "mail :\n";
        $nuevaPersona->setMail(trim(fgets(STDIN))) ;
        echo "telefono :\n";
        $nuevaPersona->setTelefono(trim(fgets(STDIN))) ;
        echo "neto :\n";
        $nuevaPersona->setNeto(trim(fgets(STDIN))) ;
        echo "************************\n";
        echo $nuevaPersona;
        echo "************************\n";
        
        $nuevaPersona2= new Persona("","",0,"","",0,0);
    
        echo "nombre :\n";
        $nuevaPersona2->setNombre(trim(fgets(STDIN))) ;
        echo "apellido :\n";
        $nuevaPersona2->setApellido(trim(fgets(STDIN))) ;
        echo "dni :\n";
        $nuevaPersona2->setDni(trim(fgets(STDIN))) ;
        echo "direccion :\n";
        $nuevaPersona2->setDire(trim(fgets(STDIN))) ;
        echo "mail :\n";
        $nuevaPersona2->setMail(trim(fgets(STDIN))) ;
        echo "telefono :\n";
        $nuevaPersona2->setTelefono(trim(fgets(STDIN))) ;
        echo "neto :\n";
        $nuevaPersona2->setNeto(trim(fgets(STDIN))) ;
        echo "************************\n";
        echo $nuevaPersona2;
        echo "************************\n";




?>