<?php
//create todo: passando in POST un argomento create
if (isset($_POST['create'])) {
    //prendiamo un argomento testo, settando un todo di default
    $todo = [
        'todo' => $_POST['text'],
        'done' => false,
    ];
    //aggiungiamo il todo alla lista todos
    $todos[] = $todo;
    //salvataggio su file 
    file_put_contents('todo.json', json_encode($todos));
}
    //cancella todo
    if (isset($_GET['delete'])) {
        echo 'delete un todo';
        die;
    };

    //update todo
    if (isset($_POST['update'])) {
        echo 'update un todo';
        die;
    }


// //decodificare in versione php il contenuto del file.json 
$database = json_decode(file_get_contents(__DIR__ . '/todo.json'));

header('Content-Type: Application/json');
echo json_encode($database);

?>