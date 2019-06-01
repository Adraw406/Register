<?php 
$SERVER ='localhost';
$USERNAME='root';
$password='';
$database='php_login_basededatos';

try {
  $conn= new PDO("mysql:host=$SERVER;dbname=$database;",$USERNAME,$password);
} catch (PDOExeption $e) {
  die ('Connected failed: '.$e->getMessage());
}
?>
