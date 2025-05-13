<?php
    require("../component/connect.php");
?>
<?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if the username and password match
        $sql = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            header("Location: index.php?loginsuccess");
            exit();
        }else{
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" type="image/png" href="../image/logo.jpg">
    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CDN link -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'>
    <!-- Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    </style>
</head>
<body>
    <main>
        <div class="login">
            <form action="" method="post">
                <h2>Log in</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
            </form>
                <div class="form-group">
                    <input type="submit" name="login" value="Log in">
                </div>
        </div>
        <div class="form-group">
            <p>Don't have an account? <a href="../addmin/signin.php">Sign up</a></p>
        </div>
    </main>
</body>
</html>
