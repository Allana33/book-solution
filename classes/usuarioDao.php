<?php
include "conexao.php";

class LivroDao{
    public function loginUsuario(Livro $lib){
        $sql = "";
        $banco= new Conexao();
        $con = $banco->getConexao();
        $stm = $con->prepare($sql);
        $stm-> bindValue(1, $lib->getNome());
        $stm-> bindValue(2, $lib->getCodigo());
        $stm-> bindValue(3, $lib->getUrl());
        $result = $stm->execute();

        if($result){
            echo "<span class='help-block' style='color: Blue;'>Cadastro efetuado com sucesso!</span>";
        }else {
            echo "<span class='help-block' style='color: Red;'>Erro no cadastro!</span>";
        }
    }

	public function buscarLivro(){
		$sql = "select * from livros";
		
		$banco= new Conexao();
		$con = $banco->getConexao();
		
		$stm = $con->prepare($sql);
		$stm->execute();

		if($stm->rowCount()>0){
			$result = $stm->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		}else {
            return 0;
        }

	}
}

