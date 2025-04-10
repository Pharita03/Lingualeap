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
<body class="volcab">
    <?php include '../addmin/head.php'; ?>
    <?php include '../addmin/sidebar.php'; ?>
    <main>
        <div class="boxvol">
            
            <div class="Box5" id="start">
                <div class="VDO">
                    <div class="Test">
                        
                        <div class="Test">
                            <button class="btn" onclick="letstart()"><h2>Get start</h2></button>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="voc" id="audio" style="display: none;">
                <div class="excer " id="1">
                    <h3 class="vol">Determine (v.)</h3>
                    <h4 class="meaning">To establish or decide something</h4>
                    <h4 class="sample">Sample: We need to determine the best course of action before proceeding.</h4>
                    <audio controls><source src="../voice/Determine.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="2" style="display: none;">
                    <h3 class="vol">Successful (adj.)</h3>
                    <h4 class="meaning">Achieving desired aims or goals</h4>
                    <h4 class="sample">Sample: Her successful business venture allowed her to retire early.</h4>
                    <audio  controls><source src="../voice/Successful.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="3" style="display: none;">
                    <h3 class="vol">Direct (v.)</h3>
                    <h4 class="meaning">To guide or instruct someone or something</h4>
                    <h4 class="sample">Sample: The teacher directed the students to form groups for the project.</h4>
                    <audio controls><source src="../voice/Direct.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="4" style="display: none;">
                    <h3 class="vol">Revise (v.)</h3>
                    <h4 class="meaning">To review and make changes to improve something</h4>
                    <h4 class="sample">Sample: I'll revise my essay tonight to incorporate the feedback from my professor.</h4>
                    <audio controls><source src="../voice/Revise.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="5" style="display: none;">
                    <h3 class="vol">Subscription (n.)</h3>
                    <h4 class="meaning">An arrangement to receive something regularly, often by paying in advance</h4>
                    <h4 class="sample">Sample: He purchased a yearly subscription to the online streaming service.</h4>
                    <audio controls><source src="../voice/Subscription.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="6" style="display: none;">
                    <h3 class="vol">Purpose (n.)</h3>
                    <h4 class="meaning">The reason for which something is done or created</h4>
                    <h4 class="sample">Sample: The purpose of this meeting is to discuss our quarterly goals.</h4>
                    <audio controls><source src="../voice/Purpose.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="7" style="display: none;" >
                    <h3 class="vol">Publication (n.)</h3>
                    <h4 class="meaning">The act of making information available to the public</h4>
                    <h4 class="sample">Sample: The publication of her research findings brought her international recognition.</h4>
                    <audio controls><source src="../voice/Publication.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="8" style="display: none;">
                    <h3 class="vol">Serve (v.)</h3>
                    <h4 class="meaning">To perform duties or provide services for someone</h4>
                    <h4 class="sample">Sample: The restaurant aims to serve fresh, locally-sourced meals to its customers.</h4>
                    <audio controls><source src="../voice/Serve.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="9" style="display: none;">
                    <h3 class="vol">Information (n.)</h3>
                    <h4 class="meaning">Facts or details about something</h4>
                    <h4 class="sample">Sample: Please provide all relevant information when filling out the application form.</h4>
                    <audio controls><source src="../voice/Information.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="10" style="display: none;">
                    <h3 class="vol">Obey (v.)</h3>
                    <h4 class="meaning">To comply with an order or follow a rule</h4>
                    <h4 class="sample">Sample: Drivers must obey traffic laws to ensure road safety.</h4>
                    <audio controls><source src="../voice/Obey.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="11" style="display: none;">
                    <h4 class="meaning">Let's finish test!</h4>
                </div>
                    <div class="btnn">
                        <button class="btn" id="back-btn"><h2>back</h2></button>
                        <button class="btn" id="next-btn"><h2>next</h2></button>
                        <button class="btn" id="return-btn" style="display: none;"><a href="../subunit/vocab.php"><h2>return</h2></a></button>
                    </div>
              
            </div>
        </div>
        <div class="library-btn">
                <a href="../unit/unit1.php">
                <button>📚 unit1 </button></a>
                <a href="../subunit2/vocab.php">
                <button> next unit2 </button></a>
             </div>  
    </main>
</body>
<script>
    function letstart(){
        document.getElementById("start").style.display="none";
        document.getElementById("audio").style.display="block";
        
        let i = 1 ;
        const totalPages = 10;
        const next = document.getElementById("next-btn");
        const back = document.getElementById("back-btn");
        const re = document.getElementById("return-btn");
        const title =  document.getElementById("start");
        const vol =document.getElementById("audio")

        function updateButtons() {
            if (i <= 1) {
                back.style.display = "none"; 
            } else {
                back.style.display = "flex"; 
            }

            if (i >= totalPages) {
                next.style.display = "none"; 
                re.style.display = "flex"; 
            } else {
                next.style.display = "flex"; 
                re.style.display = "none"; 
            }
        }

        updateButtons();

        next.addEventListener("click", () => {
            if (i < totalPages) {
                document.getElementById(i).style.display = "none"; 
                i++;
                document.getElementById(i).style.display = "flex"; 
                updateButtons(); 
            }
        });

       
        back.addEventListener("click", () => {
            if (i > 1) {
                document.getElementById(i).style.display = "none"; 
                i--;
                document.getElementById(i).style.display = "flex"; 
                updateButtons(); 
            }
        });
            


    };
    
</script>

</html>