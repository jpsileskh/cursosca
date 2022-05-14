<?php

    include(dirname(__FILE__) . "\dbConnect.php");

    $sqlquery = "SELECT id, DSvotos, NUTRIvotos, FINANCASvotos, ADMvotos, CONTvotos, GTvotos, GASTvotos, MARKTvotos, SPvotos, EVENTvotos FROM tbVotos";
    $query = $conn->query($sqlquery);
    $queryVotos = $query->fetch();

    

    $sqlCursosquery = "SELECT curso FROM tbCurso";
    $query02 = $conn->query($sqlCursosquery);
    $queryCursos = $query02->fetchAll(PDO::FETCH_COLUMN);

    
?>