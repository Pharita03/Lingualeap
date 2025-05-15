<?php
require("../component/connect.php");
session_start();

if (isset($_POST['signin'])) {
    // ดึงค่าจากฟอร์ม
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $surname = mysqli_real_escape_string($connection, $_POST['surname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $faculty = mysqli_real_escape_string($connection, $_POST['faculty']);
    $branch = mysqli_real_escape_string($connection, $_POST['branch']);
    $password = $_POST['password'];
    $passwordHASH = password_hash($password, PASSWORD_DEFAULT);

    // ตรวจสอบว่าอีเมลนี้มีอยู่แล้วหรือไม่
    $check_sql = "SELECT * FROM `user` WHERE `email` = '$email'";
    $check_result = mysqli_query($connection, $check_sql);
    if (mysqli_num_rows($check_result) > 0) {
        echo "<script>alert('Email นี้ถูกใช้ไปแล้ว');</script>";
        exit();
    }

   



    // Insert ข้อมูลผู้ใช้
    $sql = "INSERT INTO `user`(`name`, `surname`, `email`, `tel`, `faculty`, `branch`, `password`) 
            VALUES ('$username','$surname','$email','$phone','$faculty','$branch','$passwordHASH')";
    
    if (mysqli_query($connection, $sql)) {
        $_SESSION['username'] = $username;
        header("Location: index.php?uploadsuccess");
        exit();
    } else {
        echo "<script>alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล');</script>";
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
    <body class="signin-page">
</head>
<body>
    <div class="signin">
        <a href="../addmin/login.php" class="back-home">
            <i class='bx bx-left-arrow-alt'></i>
        </a>
        <form action="" method="post">
            <h2>Sign In</h2>
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" name="username" id="username" required>
                <label for="surname">Surname</label>
                <input type="text" name="surname" id="surname" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" required>
                <label for="faculty">Faculty</label>
                <select name="faculty" id="faculty" required>
                    <option value="Faculty of Business">Business Administration</option>
                    <option value="Faculty of Engineering">Engineering and Technology</option>
                    <option value="Faculty of Science">Science Energy and Environment</option>
                </select>
                <label for="branch">Branch</label>
                <select name="branch" id="branch" required>
                    <option value="BACC">BACC</option>
                    <option value="BCOM">BCOM</option>
                    <option value="BIBLA">BIBLA</option>
                    <option value="BDIM">BDIM</option>
                    <option value="CIPE">CIPE</option>
                    <option value="DSCBI">DSCBI</option>
                    <option value="ETAM">ETAM</option>
                    <option value="ILet">ILet</option>
                    <option value="MAet">MAet</option>
                    <option value="Mpet">Mpet</option>
                    <option value="Cpet">Cpet</option>
                </select>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                
            </div>
            <div class="form-group">
                <input type="submit" name="signin" value="Sign In">
            </div>
        </form>
    </div>
    
</body>
</html>
