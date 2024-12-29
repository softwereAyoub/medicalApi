<?php 
header('Content-Type: application/json');

$conn=new PDO("mysql:host=sql103.infinityfree.com;dbname=if0_37986522_medicale",'if0_37986522','ayoubmedic430');
$data = json_decode(file_get_contents('php://input'), true);
$insert=$conn->prepare('UPDATE logins  SET   nom=? where identifiant = ?');
$insert->execute([$data['Nnom'],$data['identifiant']]);
echo json_encode(['message'=>"Marid a ete changer avec success "]);