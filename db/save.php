<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$sql = "INSERT INTO feedback (name, email, comment)
        VALUES ('$name', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
    header("Location: form.html?success=1");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
