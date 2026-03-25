<?php

    $idade1 = 17;
    $idade2 = 18;
    $idade3 = 23;
    $msg = "A pessoa é de maior";

    if($idade1 >= 18){
        echo $msg . " com idade igual a " . $idade1 . "<br>";
    } else{
        echo "A pessoa é de menor com idade igual a ". $idade1 . "<br>";
    }

    if($idade2 >= 18){
        echo $msg . " com idade igual a " . $idade2 . "<br>";
    } else{
        echo "A pessoa é de menor com idade igual a " . $idade2 . "<br>";
    }

    if($idade >= 18){
        echo $msg . " com idade igual a " . $idade3 . "<br>";
    } else{
        echo "A pessoa é de menor com idade igual a " . $idade3 . "<br>";
    }

?>