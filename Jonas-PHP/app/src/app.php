<?php
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            include 'db.php';
            $from = $email;
            $to = 'jmazeika78@gmail.com';
            $sub = $subject;
            $author = 'Nuo: ' . $name . ', ' . $email;
            $msg = htmlspecialchars($message);
            // mail($to, $sub, $author, $msg, $from);
            echo "<script>alert('D4kojame. Jusu zinute gavome!')</script>";
        }
    }
}
