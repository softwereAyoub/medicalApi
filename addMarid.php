<?php
header('Content-Type: application/json');

$conn=new PDO("mysql:host=localhost;dbname=article",'root','');
$data = json_decode(file_get_contents('php://input'), true);
$insert=$conn->prepare('INSERT INTO mardas (prenom,nom,telephone,date,identifiant,montantPaye,montantReste,montantTotal) VALUES (?,?,?,?,?,?,?,?)');
$insert->execute([$data['prenom'],$data['nom'],$data['telephone'],$data['date'],$data['identifiant'],$data['montantPaye'],$data['montantReste'],$data['montantTotal']]);
echo json_encode(['message'=>"data Marid inserted succesfully ",'status'=>201]);