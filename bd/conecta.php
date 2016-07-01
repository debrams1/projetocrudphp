<?php
class conecta{
	public static function getConnection(){
		$conn = new mysqli("localhost:3306","root","admin123","registroprodutos");
		$conn->query("SET NAMES 'utf8'");
		return $conn;
	}
}
