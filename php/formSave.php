
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../stylee03.css" media="Screen">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">

    <title>Cursos CA</title>

    <?php

    include(dirname(__FILE__) . "\dbConnect.php");
    include(dirname(__FILE__) . "\queryVotos.php");
    

    $Voto = $_POST["inputResult"];
    $Nome = $_POST["inputName"];

    $insert = $conn->prepare ("INSERT INTO tbIdentificacao (Nome, Voto) VALUES (:Nome, :Voto)");

    $insert->bindParam(':Nome', $Nome, PDO::PARAM_STR);
    $insert->bindParam(':Voto', $Voto, PDO::PARAM_INT);

    if ($insert->execute()) {
        
    } else {
        echo "<br> Falha ao gravar o dado";
    }

    include(dirname(__FILE__) . "\updateVotos.php");
    ?>

</head>
<body>

    <div id="Background">

        <header>
            <div style="width: min-content;">
                <img src="..\img\logo-camargo-Aranha-PNG.png" width="140">
            </div>
            <div>
                <h1>Formulário dos Cursos da Camargo Aranha</h1>
            </div>
        </header>
        
        <main>
            <div id="divMax">
                <div id="divBackFrente">
                    <div id="content02">
                        <div id="content">
                            <span>Obrigado <?php echo utf8_encode($Nome);?> por votar no curso <?php echo utf8_encode($queryCursos[$Voto - 1]);?></span>
                        </div>
                            
                        <div id="linkConsulta">
                            <a href="consulta.php" target="_blank">Clique aqui para ver os resultados</a>
                            <a href="../index.html">Clique aqui para voltar ao Formulário</a>
                        </div>
                    </div>
                </div>
                
                <div id="divBackTras"></div>
            </div>
        </main>
        <footer>
            <a href="../devs.html">
                <img src="../img/lalala.png" width="220">
            </a> 
        </footer>
    </div>

</body>
</html>