<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Entrada de Dados - Pessoa</title>
    </head>
<body>
   <br><br><center><h1>Entrada de Dados - Pessoa</h1>
   <br><br>
   <center>
    <form method="POST" action="insere_aluno.php">     
      Nome : <input type="text" name="nome"><br><br>
      CGM : <input type="text" name="cgm"><br><br>
      Telefone : <input type="text" name="telefone"><br><br>
      Serie:<select name="serie">
                <option value="6A">6A</option>
                <option value="6B">6B</option>
                <option value="7A">7A</option>
                <option value="8A">8A</option>
                <option value="9A">9A</option>
                <option value="1A">1A</option>
                <option value="2A">2A</option>
                <option value="2TEC">2TEC</option>
                <option value="3A">3A</option>
            </select>    
    <br><br>
        <input type="submit" value="Cadastrar">
    </form><br> 
    <a href="menu.php">Voltar</a><br><br>  
<footer> Meu Site - Todos os direitos rezervados - 2022 </footer>
</body>
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
</html>