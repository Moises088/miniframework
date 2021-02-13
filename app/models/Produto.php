<?php 

	namespace App\Models;

	use MF\Model\Model;

	class Produto extends Model{

		public function getProduto(){

			$query = "select id, descricao, preco from tb_produtos";
			return $this->db->query($query)->fetchAll();
		}
	}

 ?>