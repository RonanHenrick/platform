<?php

$dbServeName = 'localhost'
$dbUser = 'root';
$dbPassword = 'root';
$dbName = 'login';

$conn = myslqi_connect($dbServeName,$dbUser,$dbPassword,$dbName);

if(!$conn) {
  die('Connection Error'.mysqli_connect_error());
}
