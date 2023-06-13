<?php
//imposto header
header('Content-Type: application/json');

//variabile per leggere il contenuto json in stringa
$ToDoList = file_get_contents("dati.json");

//variabile per poter modificare i dati presi sotto stringa
$ToDoListDati= json_decode($ToDoList , true);

//qui faccio cose 

if( isset($_POST['newData']) ) {

    $ToDoListDati[] = $_POST['newData'];
    file_put_contents("dati.json", json_encode($ToDoListDati) );

}
else if (isset($_POST['deleteTask'])){
    
    $index = $_POST['deleteTask'];
   
    array_splice($todoListDati , $index, 1);
    file_put_contents("dati.json", json_encode($todoListDati) );
}

//ristampo il dato riconvertendolo
$ToDoList = json_encode($ToDoListDati);

echo $ToDoList;

?>