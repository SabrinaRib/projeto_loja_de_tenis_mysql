<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'loja_de_tenis');
    define('PORTA' , 3307);

	$conn = new MySQLi(HOST, USER, PASS, BASE, PORTA);