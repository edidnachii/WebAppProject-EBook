<?php
session_start();

// Check if the user is already logged in, redirect to dashboard
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    header("location: dashboard.php");
    exit;
}

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate login credentials
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace 'admin' and 'password' with your actual login credentials
    if($username === 'admin' && $password === 'password'){
        // Store login status in session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to dashboard
        header("location: dashboard.php");
    }else{
        // Invalid login credentials
        $login_error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Staff Login</title>
</head>
<body>
    <h2>Staff Login</h2>
    <?php
    // Display login error message, if any
    if(isset($login_error)){
        echo '<p style="color:red;">' . $login_error . '</p>';
    }
    ?>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
