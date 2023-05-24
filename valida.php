<?php

    $dadosFormulario = array(); 
    $nome_aluno = ""; 
    $nota_aluno = 0;

    if(isset($_GET["nome"]) && isset($_GET["nota"])){

        $nome_aluno = $_GET["nome"]; 
        $nota_aluno = $_GET["nota"];

      
        $dadosFormulario["nome"] = $nome_aluno;
        $dadosFormulario["nota"] = $nota_aluno;

      

    }

   print_r($dadosFormulario);
    
    
   