<?php
$db_name = 'kuririn';
$db_host = 'mysql.agencia.vip';
$db_user = 'projetokuririn';
$db_pass = 'freeza@2022';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user,$db_pass);
