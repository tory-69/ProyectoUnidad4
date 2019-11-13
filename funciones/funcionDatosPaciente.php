<?php
    function datosPaciente($paciente,$edad,$genero,$estCiv,$dirPa){
        //if ($genero=="masculino") {
            $datPaciente="El paciente ".$paciente." de ".$edad." años de edad, sexo ".$genero.". ".$estCiv.". Con dirección en ".$dirPa;
        //}else {
            $datPaciente="La paciente ".$paciente." de ".$edad." años de edad, sexo ".$genero.". ".$estCiv.". Con dirección en ".$dirPa;
        //}
        

        return $datPaciente;
    }
?>