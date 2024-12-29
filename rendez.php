
<?php 
header('Content-Type: application/json');

$conn=new PDO("mysql:host=localhost;dbname=article",'root','');
$data = json_decode(file_get_contents('php://input'), true);

$insert=$conn->prepare('INSERT INTO rendezs (prenom,nom,telephone,date,identifiant) VALUES (?,?,?,?,?)');
$insert->execute([$data['prenom'],$data['nom'],$data['telephone'],$data['date'],$data['identifiant']]);
echo json_encode(['message'=>"data rendez-vous inserted succesfully","status"=>201]);