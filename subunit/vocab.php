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
  <!-- Font Awesome -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    body {
      font-family: 'Poppins';
    }

    .excer {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;

        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;     /* เต็มความกว้างหน้าจอ */
        height: 100vh;    /* เต็มความสูงหน้าจอ */  
        margin: 0 auto;     /* จัดกึ่งกลางเมื่อใช้ max-width */
        
        background-color: white;
       
     }

    .vol {
        color: #2E8B57;  /* สีเขียวเข้ม */
        font-size: 30px; /* ขนาดตัวอักษรใหญ่ */
    }

    .meaning {
        color: #555555;  /* สีเทาเข้ม */
        font-size: 18px; /* ขนาดตัวอักษรกลาง */
    }

    .sample {
        color: #888888;  /* สีเทาอ่อน */
        font-size: 10px; /* ขนาดตัวอักษรเล็กกว่า */
    }

    .pagination-controls {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
      width: 100%;
    }

    .page-indicator {
      background-color: #2f2f2f;
      color: #fff;
      border-radius: 20px;
      padding: 5px 12px;
      font-weight: bold;
      font-size: 14px;
    }

    .nav-btn {
      background-color: orange;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 20px;
      cursor: pointer;
      font-size: 14px;
      transition: background-color 0.3s;
    }

   .nav-btn:hover {
        background: orange;
    }


    .nav-btn i {
      margin: 0 5px;
    }

    .btn.return-btn {
      margin-top: 20px;
    }
  </style>
</head>
<body class="volcab">
  <?php include '../addmin/head.php'; ?>
  <?php include '../addmin/sidebar.php'; ?>

  <main>
    <div class="boxvol">
      <div class="Box5" id="start">
        <button class="btn1" onclick="letstart()"><h2>Get start</h2></button>
      </div>
        <div class="bannerVocab"></div>
      <div class="voc" id="audio" style="display: none;">

        <!-- ========== กล่องคำศัพท์ทั้งหมด ========== -->
        <div class="excer" id="1">
          <h3 class="vol">Determine (v.)</h3>
          <h4 class="meaning">To establish or decide something</h4>
          <audio controls><source src="../voice/Determine.m4a" type="audio/mpeg"></audio>
          <h4 class="sample">Sample: We need to determine the best course of action before proceeding.</h4>
          <div class="pagination-controls">
            <span class="page-indicator"><span id="page-counter">10/10</span></span>
            <button class="nav-btn prev"><i class="fa-solid fa-chevron-left"></i> Prev</button>
            <button class="nav-btn next">Next <i class="fa-solid fa-chevron-right"></i></button>
          </div>
        </div>

        <div class="excer" id="2">
          <h3 class="vol">Successful (adj.)</h3>
          <h4 class="meaning">Achieving desired aims or goals</h4>
          <audio controls><source src="../voice/Successful.m4a" type="audio/mpeg"></audio>
          <h4 class="sample">Sample: Her successful business venture allowed her to retire early.</h4>
          <div class="pagination-controls">
            <span class="page-indicator"><span id="page-counter">10/10</span></span>
            <button class="nav-btn prev"><i class="fa-solid fa-chevron-left"></i> Prev</button>
            <button class="nav-btn next">Next <i class="fa-solid fa-chevron-right"></i></button>
          </div>
        </div>

        <!-- ... เพิ่มคำศัพท์ได้ตามต้องการ จนถึง id="10" -->

        <div class="excer" id="10">
          <h3 class="vol">Obey (v.)</h3>
          <h4 class="meaning">To comply with an order or follow a rule</h4>
          <audio controls><source src="../voice/Obey.m4a" type="audio/mpeg"></audio>
          <h4 class="sample">Sample: Drivers must obey traffic laws to ensure road safety.</h4>
          <div class="pagination-controls">
            <span class="page-indicator"><span id="page-counter">10/10</span></span>
            <button class="nav-btn prev"><i class="fa-solid fa-chevron-left"></i> Prev</button>
            <button class="nav-btn next">Next <i class="fa-solid fa-chevron-right"></i></button>
          </div>
        </div>
      </div>

      <div class="library-btn">
        <a href="../unit/unit1.php"><button>📚 unit1</button></a>
        <a href="../subunit2/vocab.php"><button>next unit2</button></a>
      </div>
    </div>
  </main>

  <script>
    function letstart() {
      document.getElementById("start").style.display = "none";
      document.getElementById("audio").style.display = "block";

      let i = 1;
      const totalPages = 10;

      function updateDisplay() {
        document.querySelectorAll('.excer').forEach((el, index) => {
          el.style.display = (index + 1 === i) ? 'flex' : 'none';
        });

        document.querySelectorAll('.page-indicator').forEach((el, index) => {
          if (index + 1 === i) {
            el.querySelector('#page-counter').innerText = `${i}/${totalPages}`;
          }
        });

        document.querySelectorAll('.pagination-controls').forEach((control, index) => {
          const prevBtn = control.querySelector('.prev');
          const nextBtn = control.querySelector('.next');
          if (index + 1 === i) {
            prevBtn.style.display = (i > 1) ? 'inline-block' : 'none';
            nextBtn.style.display = (i < totalPages) ? 'inline-block' : 'none';
          }
        });
      }

      updateDisplay();

      document.querySelectorAll('.next').forEach(btn => {
        btn.addEventListener('click', () => {
          if (i < totalPages) {
            i++;
            updateDisplay();
          }
        });
      });

      document.querySelectorAll('.prev').forEach(btn => {
        btn.addEventListener('click', () => {
          if (i > 1) {
            i--;
            updateDisplay();
          }
        });
      });
    }
  </script>
</body>
</html>
