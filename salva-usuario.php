<?php
switch($_REQUEST["acao"]){
    case 'cadastrar':
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = md5 ($_POST["senha"]);
    $data_nasc= $_POST["data_nasc"];

    $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}' )";

    $res = $conn -> query ($sql);

    if($res==true){
        print "<script>alert('Cadastrado com sucesso');</script>";
        print "<script>location.href='?page=lista'; </script>";
    }else{
        print "<script>alert('Não foi possível completar cadastro'); </script>";
        print "<script>location.href='?page=lista'; </script>";
    }
    break;

    case 'alterar':
     
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5 ($_POST["senha"]);
            $data_nasc= $_POST["data_nasc"];
        
            $sql= "UPDATE usuarios SET 
            nome='{$nome}',
            email='{$email}',
            senha='{$senha}',
            data_nasc='{$data_nasc}' WHERE  id=".$_REQUEST["id"];

        
            $res = $conn -> query ($sql);
        
            if($res==true){
                print "<script>alert('Alterado com sucesso');</script>";
                print "<script>location.href='?page=lista'; </script>";
            }else{
                print "<script>alert('Não foi possível completar alteração'); </script>";
                print "<script>location.href='?page=lista'; </script>";
            } 
            break;

    case 'excluir':
       $sql= " DELETE FROM usuarios WHERE id= ".$_REQUEST["id"];

       $res = $conn -> query ($sql);

    if($res==true){
        print "<script>alert('Excluído com sucesso');</script>";
        print "<script>location.href='?page=lista'; </script>";
    }else{
        print "<script>alert('Não foi possível completar exclusão'); </script>";
        print "<script>location.href='?page=lista'; </script>";
    } 
    break;

}