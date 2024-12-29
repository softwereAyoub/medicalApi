<?php
header('Content-Type: application/json');

$conn=new PDO("mysql:host=localhost;dbname=article",'root','');
$data = json_decode(file_get_contents('php://input'), true);
$insert=$conn->prepare('DELETE from  mardas where  identifiant=?');
$insert->execute([$data['identifiant']]);
echo json_encode(['message'=>"Marids a ete supprimer avec success "]);