<?php
    include 'connectdb.php';

    // Get data from form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    // Insert data into the database
    $sql = "INSERT INTO inquiries (name, phone, email, msg) VALUES ('$name', '$phone', '$email', '$msg')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.html'); // redirect to the HTML page
        exit(); // stop processing the current script
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
?>