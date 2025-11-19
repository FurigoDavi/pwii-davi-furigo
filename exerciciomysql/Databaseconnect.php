<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'BancoSqlCode');
$conn= mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível estabelecer conexão');



?>