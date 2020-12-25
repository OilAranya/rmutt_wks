<?php include 'db_contact.php'; ?>

<?php

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $text_question = $_POST['text_question'];

    mysqli_query($connect,"INSERT INTO question (firstname, lastname, username, phone_number, text_question)
    VALUES ('$firstname', '$lastname', '$username', '$phone_number', 'text_question')");

    if (mysqli_affected_rows($connect) > 0) {
        echo '<p>xxxxxxxxx</p>';
        echo '<a href="contact.php">zzzzzzzzzzzz</a>';
    } eles {
        echo 'aaaaaaaaaaaaa';
        echo mysqli_error($connect);
    }
    
    ?>

