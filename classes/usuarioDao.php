<?php
include "conexao.php";

class UsuarioDao{

    public function loginUsuario(Usuario $user){
        $sql = "";
        $banco= new Conexao();
        $con = $banco->getConexao();
        $stm = $con->prepare($sql);
        $stm-> bindValue(1, $user->getEmail_Usuario());
        $stm-> bindValue(2, $user->getSenha_Usuario());
        $result = $stm->execute();

        if($result){
            echo "<span class='help-block' style='color: Blue;'>Login efetuado com sucesso!</span>";
        }else {

        }
    }









}//fim classe
