<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Insere Pessoa</title>
    </head>
    <style>

@font-face {
    font-family: 'rpg';
    src:
        url('TheWildBreathOfZelda-15Lv.ttf') format('truetype')
}

*{
    color: whitesmoke;
    font-family: "rpg";
    margin: 0;
    padding: 0;
}
body{
    background-image: url("bg.jpg");
    background-repeat: no-repeat;
    background-position: 50%;
    background-size:cover;
    min-height: 100vh;
    image-rendering: optimizeQuality;

}


h1{
    font-size: 5em;
    text-shadow: 2px 2px 8px #B24BF3;
}
</style>

<body>
   <br><br><center><h1>Insere Dados - Aluno</h1> 
   <br><br><center>
    <?php 
        include "conecta.php"; 
        

        $nome = $_POST["nome"];
        $cgm = $_POST["cgm"];
        $telefone = $_POST["telefone"];
        $serie = $_POST["serie"];

            echo $nome,"<br>",$cgm,"<br>",$telefone,"<br>",$serie;


        $sql="INSERT INTO aluno (nome,cgm,telefone,serie) VALUES
        ('$nome','$cgm','$telefone','$serie')"; 
         
        if(mysqli_query($ligacao, $sql)) {
             echo "<br>Dados inseridos com sucesso.";
        }else {
            echo "Erro nao consegui inserir:" . $sql . "<br>" . mysqli_error($ligacao);
             } 
        mysqli_close($ligacao); 

    ?>
</body>
</htm