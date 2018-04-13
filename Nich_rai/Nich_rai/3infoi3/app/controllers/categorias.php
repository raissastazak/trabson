<?php

/**
- ACAO PRINCIPAL - LISTAR TODAS AS CATEGORIAS

 **/
require_once '../modelos/CrudCategoria.php';

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        echo "Voce escolheu INDEX";

        $crud = new CrudCategoria();
        $categorias = $crud->getCategorias();
        include '../views/categorias/index.php';
        
        break;
    case 'inserir':
        echo "Voce escholeu INSERIR";
        break;
    default:
        echo "Acao INVALIDA";
}