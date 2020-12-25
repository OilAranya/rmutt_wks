<?php
    include "connection.php";

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    
    echo '<hr>';
// -------------------------

    $_firstname = $_POST['firstname'];
    $_lastname = $_POST['lastname'];
    $_username = $_POST['username'];
    $_phone_number = $_POST['phone_number'];
    $_text_question = $_POST['text_question'];

    $sql = "INSERT INTO question
    (firstname, lastname, username, phone_number, text_question)
    VALUES
    (
    '$firstname', 
    '$lastname', 
    '$username', 
    '$phone_number', 
    '$text_question'
    )
    ";

    $result = mysqli_query($conn, $sql) or die ("Error in sql : $sql ". 
    mysqli_error($sql));

    mysqli_close($conn);

    echo $sql;
    echo '<hr>';

    if($result){
        echo 'Insert Successfully';   
    }else{
        echo 'Error !!';
    }

?>