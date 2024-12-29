<?php
header('Content-Type: application/json');

$conn=new PDO("mysql:host=localhost;dbname=article",'root','');
$data = json_decode(file_get_contents('php://input'), true);
$insert=$conn->prepare('DELETE from  rendezs where telephone=? && identifiant=? && date=?');
$insert->execute([$data['telephone'],$data['identifiant'],$data['date']]);
echo json_encode(['message'=>"Rendez a ete supprimer avec success "]);