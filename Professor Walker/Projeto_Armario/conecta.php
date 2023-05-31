<?php
        $localhost = "127.0.0.1:3306";
        $user = "root";
        $senha = "42";
        $banco = "aluga_armario";  

         $ligacao = mysqli_connect($localhost, $user, $senha, $banco);

        if (!$ligacao) 
           {
	         ( die("Falha ao conectar: " . mysqli_connect_error())) ;
           }
        else
	       {
	           echo"BD conectado com sucesso.<br>";
	       }
?>           