<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
    <style>
        main {
            padding: 20px;
        }

        fieldset {
            padding: 20px;
            width: 50%;
        }

        input {
            width: 250px;
            height: 30px;
        }
    </style>
</head>
<body>
        <?php include './include/header.php'; ?>

    <form action="" method="post" autocomplete="on">
        <fieldset>
            <legend>Login</legend>
            <input type="email" name="email" placeholder="Email" required>
            <br><br>
            <input type="password" name="password" placeholder="Password" required>
            <br><br >
            <input type="submit" name="login" value="Login">
        </fieldset>
    </form>
</body>
</html>

<?php
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform login logic here
    $query = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
    $data = mysqli_query($conn, $query);
  

    if(mysqli_num_rows($data) == 1) {
       echo "Login Successful!";
       $_SESSION['email'] = $email; // Store email in session
       header("Location: dashboard.php"); // Redirect to index.php after successful login
    exit();
       } else {
        echo "Login Failed";
    }
}