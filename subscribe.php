<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['subscribe-email'];

    // Example: Save email to a text file (or database)
    $file = 'subscribers.txt';
    file_put_contents($file, $email . "\n", FILE_APPEND | LOCK_EX);

    echo "Thank you for subscribing!";
}
?>
