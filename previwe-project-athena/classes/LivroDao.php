<?php
include "conexao.php";

class LivroDao{
    public function cadastrarLivro(Livro $lib){
        $sql = "insert into livros(nome, codigo, url) values(?, ?, ?)";
        $banco= new Conexao();
        $con = $banco->getConexao();
        $stm = $con->prepare($sql);
        $stm-> bindValue(1, $lib->getNome());
        $stm-> bindValue(2, $lib->getCodigo());
        $stm-> bindValue(3, $lib->getUrl());
        $result = $stm->execute();

        if($result){
            echo "<script>alert ('Cadastrado')</script>";
        }else {
            echo "<script>alert ('Erro')</script>";
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

