<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" type="image/png" href="../image/logo.jpg">
    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CDN link -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    </style>
    </head>
    <body class="index">
        <?php include '../addmin/head.php'; ?>
        <?php include '../addmin/sidebar.php'; ?>
        <main>
        <div class="mainbox">
            <div class="box3"></div>
            <div class="subbox3">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut congue lacus. Donec consectetur justo neque, sed ullamcorper justo tristique ut. Nullam sollicitudin condimentum lectus eget vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam tempus viverra diam in viverra. Vestibulum accumsan, mi in varius aliquam, augue lacus hendrerit lorem, eget condimentum nisi massa sed ex. Ut quis fringilla dolor, vel iaculis nisi. Phasellus quis sagittis risus. Integer nunc urna, semper a pellentesque id, dictum sit amet est. Donec mollis ligula non mauris consequat scelerisque quis et eros. Aliquam euismod consequat ligula, vel aliquet lacus cursus sed. Pellentesque eget dolor justo.</h2>
            </div>
            <div class="masteroftoeic">
                <img src="../image/welcomelingualeap.png"  style="width: 100%;" class="logo">
            </div>
            <div class="subbox4">
                <div class="start">
                    <a href="../unit/unit1.php"><h1>Let's start</h1></a>
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
        </div>
    </main>
</body>
</html>
