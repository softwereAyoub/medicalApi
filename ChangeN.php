<?php 
header('Content-Type: application/json');

$conn=new PDO("mysql:host=fdb1027.runhosting.com;dbname=4569437_medi",'4569437_medi','databasemedi123');

echo json_encode(['message'=>"Marid a ete changer avec success "]);