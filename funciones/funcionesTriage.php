<?php
    function sistolica($preSist){
        switch ($preSist) {
            case 'uno':
                $r1=1;
                break;
            case 'dos':
                $r1=2;
                break;
            case 'tres':
                $r1=3;
                break;
            case 'cuatro':
                $r1=5;
                break;
            case 'cinco':
                $r1=4;
                break;
            
        }
        return $r1;
    }
    function diastolica($preDiast){
        switch ($preDiast) {
            case 'puno':
                $r2=1;
                break;
            case 'pdos':
                $r2=2;
                break;
            case 'ptres':
                $r2=3;
                break;
            case 'pcuatro':
                $r2=5;
                break;
            case 'pcinco':
                $r2=4;
                break;
            
        }
         return $r2;
    }
    function respiratoria($frecResp){
        if ($frecResp >=0 && $frecResp <=6) {
            $r3=1;
         }else {
             if ($frecResp >=7 && $frecResp <=10) {
                 $r3=2;
             }else {
                 if ($frecResp >= 11 && $frecResp <=13) {
                     $r3=3;
                 }else {
                     if ($frecResp >=14 && $frecResp <= 20) {
                         $r3=4;
                     }else {
                         if ($frecResp >=21) {
                             $r3=5;
                         }
                     }
                 }
             }
         }
         return $r3;
    }
    function cardiaca($frecCar){
         if ($frecCar >=0 && $frecCar <=40) {
            $r4=1;
         }else {
             if ($frecCar >=41 && $frecCar <=54) {
                 $r4=2;
             }else {
                 if ($frecCar >= 55 && $frecCar <=59) {
                     $r4=3;
                 }else {
                     if ($frecCar >=60 && $frecCar <= 89) {
                         $r4=4;
                     }else {
                         if ($frecCar >=90) {
                             $r4=5;
                         }
                     }
                 }
             }
         }
         return $r4;
    }
    function temperatura($temp){
         if ($temp >=0 && $temp <=29) {
            $r5=1;
         }else {
             if ($temp >=30 && $temp <=33.9) {
                 $r5=2;
             }else {
                 if ($temp >= 34 && $temp <=35.9) {
                     $r5=3;
                 }else {
                     if ($temp >=36 && $temp <= 37.5) {
                         $r5=4;
                     }else {
                         if ($temp >=37.6 ) {
                             $r5=5;
                         }
                     }
                 }
             }
         }
         return $r5;
    }

    function funcionMotCon($motivo){
        switch ($motivo) {
            case 'agre':
                $r=4;
                break;
            case 'alerg':
                $r=3;
                break;
            case 'mental':
                $r=4;
                break;
            case 'analitica':
                $r=1;
                break;
            case 'consc':
                $r=2;
                break;
            case 'cardiaco':
                $r=5;
                break;
            case 'vom':
                $r=2;
                break;
            case 'bebe':
                $r=3;
                break;
            case 'cefalia':
                $r=1;
                break;
            case 'conv':
                $r=5;
                break;
            case 'ext':
                $r=2;
                break;
            case 'dem':
                $r=1;
                break;
            case 'dis':
                $r=5;
                break;
            case 'abd':
                $r=3;
                break;
            case 'esp':
                $r=1;
                break;
            case 'extre':
                $r=2;
                break;
            case 'escr':
                $r=4;
                break;
            case 'renal':
                $r=5;
                break;
            case 'torac':
                $r=1;
                break;
            case 'em':
                $r=3;
                break;
            case 'fi':
                $r=2;
                break;
            case 'foc':
                $r=4;
                break;
            case 'hem':
                $r=5;
                break;
            case 'her':
                $r=3;
                break;
            case 'hip':
                $r=4;
                break;
            case 'infl':
                $r=4;
                break;
            case 'int':
                $r=5;
                break;
            case 'bult':
                $r=2;
                break;
            case 'gral':
                $r=1;
                break;
            case 'mareo':
                $r=3;
                break;
            case 'niño':
                $r=1;
                break;
            case 'cardio':
                $r=3;
                break;
            case 'poli':
                $r=5;
                break;
            case 'quema':
                $r=4;
                break;
            case 'lipo':
                $r=2;
                break;
            case 'buco':
                $r=2;
                break;
            case 'oido':
                $r=3;
                break;
            case 'geni':
                $r=3;
                break;
            case 'ocu':
                $r=3;
                break;
            case 'rino':
                $r=4;
                break;
            case 'craneo':
                $r=5;
                break;
            case 'extremid':
                $r=4;
                break;
            case 'mult':
                $r=1;
                break;
            case 'torazo':
                $r=1;
                break;
            case 'otra':
                $r=1;
                break;

            //default:
               // $r="5";
                //break;
        }
        return $r;
    }

    function respuestaOcular($resOc){
        switch ($resOc) {
            case 'espontanea':
                $r1 = 1;
                break;
            case 'ordenver':
                $r1 = 2;
                break;
            case 'dolor':
                $r1 = 3;
                break;
            case 'noresp':
                $r1 = 5;
                break;
            
            //default:
                
               // break;
        }
        return $r1;
    }
    function respuestaVerb($resVerb){
        switch ($resVerb) {
            case 'orientado':
                $r2 = 1;
                break;
            case 'desorientado':
                $r2 = 2;
                break;
            case 'inaprop':
                $r2 = 3;
                break;
            case 'incompren':
                $r2 = 4;
                break;
            case 'ninguna':
                $r2 = 5;
                break;
            
            //default:
           
                //break;
        }
        return $r2;
    }
    function respuestaMotora($resMot){
        switch ($resMot) {
            case 'obedece':
                $r3 = 1;
                break;
            case 'localizar':
                $r3 = 2;
                break;
            case 'retirada':
                $r3 = 3;
                break;
            case 'anormal':
                $r3 = 4;
                break;
            case 'extension':
                $r3 = 5;
                break;
            case 'ninguna':
                $r3 = 6;
                break;
            //default:
           
                //break;
        }
        return $r3;
    }

    function funcionTriage($triage){
        if ($triage <=17) {
            $ResTriage = "No urgente.";
        }else {
            if ($triage >=18 && $triage <=26) {
                $ResTriage = "Prioritario.";
            }else {
                if ($triage >=27 && $triage <=35) {
                    $ResTriage = "Urgencia.";
                }else {
                    $ResTriage=($triage>=36 && $triage<=40)? "Emergencia": "Reanimación.";
                }
            }
        }
        return $ResTriage;
    }
?>