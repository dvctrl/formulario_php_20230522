<?php

    $dadosFormulario = array(); 
    $nome_aluno = ""; 
    $nota_aluno = 0;

    if(isset($_GET["Nome"]) && isset($_GET["Nota"])){

        $nome_aluno = $_GET["Nome"]; 
        $nota_aluno = $_GET["Nota"];

      
        $dadosFormulario["Nome"] = $nome_aluno;
        $dadosFormulario["Nota"] = $nota_aluno;

      

    }

   print_r($dadosFormulario);
    
    
   