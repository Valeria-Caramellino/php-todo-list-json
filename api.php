<?php
//imposto header
header('Content-Type: application/json');

//variabile per leggere il contenuto json in stringa
$ToDoList = file_get_contents("dati.json");

//variabile per poter modificare i dati presi sotto stringa
$ToDoListDati= json_decode($ToDoList , true);

//qui faccio cose 

if( isset($_POST['newData']) ) {

    $ToDoListDati[] = [
        'text' => $_POST['newData'],
        'done' => false
    ] ;
    file_put_contents("dati.json", json_encode($ToDoListDati) );

}
elseif (isset($_POST['deleteTask'])){
    
    $index = $_POST['deleteTask'];
   
    array_splice($ToDoListDati , $index, 1);
    file_put_contents("dati.json", json_encode($ToDoListDati) );
}

//ristampo il dato riconvertendolo
$ToDoList = json_encode($ToDoListDati);

echo $ToDoList;

?>