<?php
header('Content-Type: application/json');

$conn=new PDO("mysql:host=localhost;dbname=article",'root','');
$data = json_decode(file_get_contents('php://input'), true);
$insert=$conn->prepare('SELECT * from rendezs where identifiant=? && date=?');
$insert->execute([$data['identifiant'],$data['date']]);
$resp=$insert->fetchAll(PDO::FETCH_OBJ);
if(count($resp) >=1){
    echo json_encode($resp);
}else{
    echo json_encode(['message'=>"il n'est pas de rendez - vous "]);
}
