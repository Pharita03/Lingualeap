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
<body class="home">
<?php include '../addmin/head.php'; ?>
<?php include '../addmin/sidebar.php'; ?>
    <main>
        <div class="mainbox">
            <div class="box3">
            </div>
            <div class="course">
    <div class="box4">
        <div class="card" onclick="window.location.href='../subunit/grammar.php'">
            <i class='bx bx-book'></i>
            <a href="../subunit/grammar.php"><h3>Grammar</h3></a>
        </div>
    </div>
    <div class="box4">
        <div class="card" onclick="window.location.href='../subunit/listening.php'">
            <i class='bx bx-headphone'></i>
            <a href="../subunit/listening.php"><h3>Listening</h3></a>
        </div>
    </div>
    <div class="box4">
        <div class="card" onclick="window.location.href='../subunit/reading.php'">
            <i class='bx bx-book-reader'></i>
            <a href="../subunit/reading.php"><h3>Reading</h3></a>
        </div>
    </div>
    <div class="box4">
        <div class="card" onclick="window.location.href='../subunit/vocab.php'">
            <i class='bx bx-font'></i>
            <a href="../subunit/vocab.php"><h3>Vocabulary</h3></a>
        </div>
    </div>
</div>

        </div>
    </main>
</body>
</html>