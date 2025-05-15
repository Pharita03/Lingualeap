<?php
    require("../component/connect.php");
    session_start();
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
    <header>
        <div class="box1">
            <button class='bx bx-menu' name="menu" onclick="sidebar()"style="cursor: pointer" id="menu"  display= flex align-items= center ></button>
            <a href="../addmin/index.php"><img src="../image/logo.jpg"  style="height: 5rem; " class="logo"></a>
        </div>
        <div class="box2">
        </div>
        <div class="login1">
            <?php
                if (isset($_SESSION['username'])) {
                    echo "<h3>" . $_SESSION['username'] . "</h3>";
                } else {
                    echo '<a href="../addmin/login.php">Log in</a>';
                }
            ?>
            
        </div>
    </header>
    <div class="sidebar"  id="sidebar" style="display: none;">
        <menu>
            <ul>
                <li><a href="../addmin/index.php"><i class='bx bx-home'></i>Home</a></li>
                <li><a href="../addmin/All_Couse.php"><i class='bx bx-book'></i>Course</a></li>
                <li><a href="../addmin/test.php"><i class='bx bx-message-square'></i>Test</a></li>
                <?php
                    if (isset($_SESSION['username'])) {
                        echo '<li><a href="../addmin/logout.php"><i class="bx bx-log-out"></i>Log out</a></li>';
                    } else {
                        echo '<li><a href="../addmin/login.php"><i class="bx bx-log-in"></i>Log in</a></li>';
                    }
                ?>
            </ul>
        </menu>
    </div>
</body>
<script>
    function sidebar(){
        const menusidebar = document.getElementById("menu");
        const side = document.getElementById("sidebar");
        if (side.style.display ==="none"){
            document.getElementById("sidebar").style.display = "block";
        } else{
            document.getElementById("sidebar").style.display = "none";
        };
        
    };
</script>
</html>
