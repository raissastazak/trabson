<?php

    session_start();
    function verificalogin($login, $senha){
     if ($login=='admin' and $senha=='admin'){
         return true;
     }else{
         return false;
     }
    }


    if (verificalogin($_POST['login'], $_POST['senha'])){
        //redirecionar
        $_SESSION['nome'] = 'Administrador';
        $_SESSION['email']= 'admin@gmail.com';
        header('Location:_index.php');
    }else{
        //redirecionar
        header('Location:_index.php?erro=1');
    }