<?php 
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents('php://input'), true);
$conn=new PDO("mysql:host=localhost;dbname=article",'root','');
$insert=$conn->prepare('SELECT * from logins where  identifiant =? && status = ?');
$insert->execute([$data['identifiant'],'oui']);
$data=$insert->fetchAll(PDO::FETCH_OBJ);
if(count($data) >=1){
    echo json_encode($data);
}else{
    echo json_encode(['message'=>"votre liste est vide","status"=>404]);
}