

<?php
/*
API REST v1

author: Richard Ferreira Geraldo

*/
	class Usuarios
	{
		public function mostrar()
		{

			$serverName = "127.0.0.1";
			$port = "8889";
			$dbName = "bancoteste";
			$userName = "root";
			$password = "root";

			
		
			
			
			$con = new PDO("mysql:host=$serverName;dbname=$dbName;",
			$userName, $password);

			$sql = "SELECT * FROM area_users ORDER BY id ASC";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
			}

			if (!$resultados) {
				throw new Exception("Nenhum usuario encontrado!");
			}
			
			return $resultados;
		}
	}