<?php
require("db.php");

banco("DROP TABLE IF EXISTS usuario");
echo "<p>DB: Tabela usuario apagada...</P>";

$sql ="CREATE TABLE usuario (";
$sql .="codigo SERIAL NOT NULL,";
$sql .="nome VARCHAR(250),";
$sql .="email VARCHAR(100),";
$sql .="senha VARCHAR(100),";
$sql .="PRIMARY KEY (codigo)";
$sql .=");";
banco($sql);
echo "<p>DB: Tabela usuario criada...</p>";

$sql ="INSERT INTO usuario (nome, email, senha)";
$sql ="VALUES ('fulano de tal', 'fulano@email.com', '1');";
banco($sql);
echo "<p>DB: tabela usuario populada</P>";





?>