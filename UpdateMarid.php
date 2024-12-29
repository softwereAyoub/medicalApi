<?php 
header('Content-Type: application/json');

$conn=new PDO("mysql:host=localhost;dbname=article",'root','');
$data = json_decode(file_get_contents('php://input'), true);
$insert=$conn->prepare('UPDATE mardas  SET  prenom=? ,nom=? , telephone=? , date = ? , montantPaye=? , montantReste=? , montantTotal=? where telephone=? && identifiant=?');
$insert->execute([$data['prenom'],$data['nom'],$data['telephone'],$data['date'],$data['montantPaye'],$data['montantReste'],$data['montantTotal'],$data['telephone'],$data['identifiant']]);
echo json_encode(['message'=>"Marid a ete changer avec success "]);