<?php
if(isset($_SESSION["user_id"])){
    header("Location: index.php?page=home");
    exit;
}else{
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>

<body>
    <form action="index.php?page=login" method="POST">
        <h1>Login</h1>
        <div class="input-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username" required><br><br>
        </div>
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" required><br><br>
        </div>

        <button type="submit">Login</button>
</body>

</html>
<?php }?>