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
<body class="allcourse">
<?php include '../addmin/head.php'; ?>
<?php include '../addmin/sidebar.php'; ?>
    <main>
        <div class="couse">
            <div class="text"><h3>All course</h3></div>
            <div class="allunit">
                <div class="Unit1" onclick="window.location.href='../unit/unit1.php'">
                    <a href="../unit/unit1.php"><h3></h3></a>
                </div>
                <div class="Unit2" onclick="window.location.href='../unit/unit2.php'">
                    <a href="../unit/unit2.php"><h3></h3></a>
                </div>
                <div class="Unit3" onclick="window.location.href='../unit/unit3.php'">
                    <a href="../unit/unit3.php"><h3></h3></a>
                </div>
                <div class="Unit4" onclick="window.location.href='../unit/unit4.php'">
                    <a href="../unit/unit4.php"><h3></h3></a>
                </div>
                <div class="Unit5" onclick="window.location.href='../unit/unit5.php'">
                    <a href="../unit/unit5.php"><h3></h3></a>
                </div>
            </div>
        </div>
    </main>
    <footer style="display:none;">
        <div class="end">
            <ul>
                <li><div class="about"><h3>About</h3></div></li>
                <li><div class="feedback"><h3>Feedback</h3></div></li>
                <li><div class="help"><h3>Help</h3></div></li>
                <li><div class="contact"><h3>Contact</h3></div></li>
            </ul>
        </div>
    </footer>

</body>
</html>