<?php 
 require 'fonction.php';
// if(isset($_POST['psuedo']) && isset($_POST['textchat'])){
//     $psuedo = $_POST['psuedo'];
//     $mesg = $_POST['textchat'];
    
//     send_message($psuedo, $mesg);

    
// }
//  affichage();
 $allMessage = affichage();

$data = [
    [
        "id" => 1, 
        "nom"=> "Ivan"
    ],
    [
        "id" => 1, 
        "nom"=> "Ivan"
    ],
    [
        "id" => 1, 
        "nom"=> "Ivan"
    ]
    
];

echo json_encode($allMessage);

?>