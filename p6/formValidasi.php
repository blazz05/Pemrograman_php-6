<?php

function otentikasi($uname, $pass)
{
    return true;
}

$dataFile = "submitted_data.txt";

$username = "";
$password = "";
$error_message = "";
$submitted = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (otentikasi($username, $password)) {
        $submitted = true;

        $data = "Submitted Username: $username\nSubmitted Password: $password\n\n";
        file_put_contents($dataFile, $data, FILE_APPEND);
    } else {
        $error_message = "Invalid username or password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h2>Login</h2>
    <?php if (!empty($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $username; ?>" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $password; ?>" required><br>

        <input type="submit" value="Login">
    </form>

    <?php if ($submitted) : ?>
        <p>Submitted Username: <?php echo $username; ?></p>
        <p>Submitted Password: <?php echo $password; ?></p>
    <?php endif; ?>
</body>
</html>
