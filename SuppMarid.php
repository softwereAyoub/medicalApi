<?php
header('Content-Type: application/json');

$conn=new PDO("mysql:host=localhost;dbname=article",'root','');
$data = json_decode(file_get_contents('php://input'), true);
$insert=$conn->prepare('DELETE  from  mardas where telephone=? && identifiant=?');
$insert->execute([$data['telephone'],$data['identifiant']]);
echo json_encode(['message'=>"Marid a ete supprimer avec success "]);