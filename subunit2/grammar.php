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
<body class="grammar">
    <?php include '../addmin/head.php'; ?>
    <?php include '../addmin/sidebar.php'; ?>
    <main>
        <div class="Box5"> 
            <div class="bannerGrammar"></div>
            <div class="container">
                <div class="subdetail">
                    <h2>Unit 2 Part : Grammar</h2>
                    <a href="../unit/unit2/Unit%202%20Grammar%20VDO%20description.docx.pdf" 
                       download="Grammar unit 2 description">
                        <button class="download-btn">
                            <i class='bx bxs-file-pdf'></i> Description 
                        </button>
                    </a>
                </div>

                <div class="VDO">
                    <video width="640" height="480" controls>
                        <source src="../unit/unit2/grammar/Parts of Speech.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="library-btn">
                <a href="../unit/unit2.php">
                    <button>📚 unit2 </button>
                </a>
                <a href="../subunit3/grammar.php">
                    <button> next unit3 </button>
                </a>
            </div>        
        </div> <!-- ปิด Box5 -->
    </main>
</body>
</html>

