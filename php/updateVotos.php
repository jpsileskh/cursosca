<?php
switch($Voto) {
        case 1:
            $newValue = $queryVotos[1] + 1;

            $sqlEdit = "UPDATE tbVotos SET DSvotos='$newValue' WHERE id=1";
            $conn->exec($sqlEdit);

            break;
        case 2:
            $newValue = $queryVotos[2] + 1;

            $sqlEdit = "UPDATE tbVotos SET NUTRIvotos='$newValue' WHERE id=1";
            $conn->exec($sqlEdit);

            break;
        case 3:
            $newValue = $queryVotos[3] + 1;

            $sqlEdit = "UPDATE tbVotos SET FINANCASvotos='$newValue' WHERE id=1";
            $conn->exec($sqlEdit);

            break;
        case 4:
            $newValue = $queryVotos[4] + 1;

            $sqlEdit = "UPDATE tbVotos SET ADMvotos='$newValue' WHERE id=1";
            $conn->exec($sqlEdit);

            break;
        case 5:
            $newValue = $queryVotos[5] + 1;

            $sqlEdit = "UPDATE tbVotos SET CONTvotos='$newValue' WHERE id=1";
            $conn->exec($sqlEdit);

            break;
        case 6:
            $newValue = $queryVotos[6] + 1;

            $sqlEdit = "UPDATE tbVotos SET GTvotos='$newValue' WHERE id=1";
            $conn->exec($sqlEdit);

            break;
        case 7:
            $newValue = $queryVotos[7] + 1;

            $sqlEdit = "UPDATE tbVotos SET GASTvotos='$newValue' WHERE id=1";
            $conn->exec($sqlEdit);

           break;
        case 8:
            $newValue = $queryVotos[8] + 1;

            $sqlEdit = "UPDATE tbVotos SET MARKTvotos='$newValue' WHERE id=1";
            $conn->exec($sqlEdit);

            break;
        case 9:
            $newValue = $queryVotos[9] + 1;

            $sqlEdit = "UPDATE tbVotos SET SPvotos='$newValue' WHERE id=1";
            $conn->exec($sqlEdit);

            break;
        case 10:
            $newValue = $queryVotos[10] + 1;

            $sqlEdit = "UPDATE tbVotos SET EVENTvotos='$newValue' WHERE id=1";
            $conn->exec($sqlEdit);

            break; 
        default:
            echo "você não selecionou nenhum curso";
    }
    
?>