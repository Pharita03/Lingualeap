<?php
    require("../component/connect.php");
    
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

<body class="exam">
    <?php include '../addmin/head.php'; ?>
    <?php include '../addmin/sidebar.php'; ?>
    <main style="display: flex; flex-direction: column; flex-flow: column wrap;">
       <?php
            $type_data="";
            $unit="" ;
            session_start();
            $type_data = $_SESSION["type_data"];
            $unit =  $_SESSION["unit"];
            $type = $_SESSION["type"];
            $name = '';
            $score = 0;
            $sql2 = "SELECT answer,numquiz FROM $type_data WHERE unitID = $unit";
            $resulted = mysqli_query($connection, $sql2);
            $rows = mysqli_fetch_all($resulted, MYSQLI_ASSOC);
            $answers = array();
            //echo "$type_data , $unit";
            foreach ($rows as $row):
                $answers[] = [(int)$row["numquiz"],$row["answer"]];
            endforeach ;
            sort($answers);
            $total_questions = count($answers);
        
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $elapsedTime = isset($_POST['elapsedTime']) ? intval($_POST['elapsedTime']) : 0;
                $timeused = 60*10 - $elapsedTime;
                $minutes = floor($timeused / 60);
                $seconds = $timeused % 60;
                
                
                if (array_key_exists('submit',$_POST)){
                    $name = mysqli_real_escape_string($connection, $_POST["name"]);
                    $surname = mysqli_real_escape_string($connection, $_POST["surname"]);
                    $email = mysqli_real_escape_string($connection, $_POST["email"]);
                    $tel = mysqli_real_escape_string($connection, $_POST["tel"]);
                    $faculty = mysqli_real_escape_string($connection, $_POST["faculty"]);
                    $branch = mysqli_real_escape_string($connection, $_POST["branch"]);
                    $oldname = mysqli_query($connection,"SELECT id,name,surname FROM user");
                    for ($i = 1; $i<=$total_questions; $i++){
                        if ($answers[$i-1][1]=== $_POST[$i]){
                            $score += 1;
                        }
                    }
                    if ($oldname->num_rows > 0){
                        while ($row = $oldname->fetch_assoc()){
                            $n = $row["name"];
                            $s = $row["surname"];
                            if ($n == $name && $s == $surname){
                                $true = TRUE;
                                $id = $row["id"];
                                break;
                            }else{
                                $true = FALSE;
                            }
                        }
                    }else{
                        echo"Error";
                    }
                    if ($true == TRUE){
                        echo "<h2> You got score : $score </h2>";
                        echo "<h2> Time used: {$minutes}m {$seconds}s </h2>";
                    
                    }else{
                        $sql = "INSERT INTO user (name, surname, email, tel, faculty, branch) VALUES ('$name', '$surname', '$email', '$tel', '$faculty', '$branch')"; 
                        $result = mysqli_query($connection,$sql);
                        echo "<h2> You got score : $score </h2>";
                        echo "<h2> Time used: {$minutes}m {$seconds}s </h2>";
                    }
                    $oldname = mysqli_query($connection,"SELECT id,name,surname FROM user");
                    if ($oldname->num_rows > 0){
                        while ($row = $oldname->fetch_assoc()){
                            $n = $row["name"];
                            $s = $row["surname"];
                            if ($n == $name && $s == $surname){
                                $rue = TRUE;
                                $id = $row["id"];
                                $score = mysqli_query($connection,"INSERT INTO `score` (id,type,score,time,unitID) VALUES ('$id','$type','$score','$minutes.$seconds',$unit)");
                                break;
                            }else{
                                $rue = FALSE;
                            }
                        }
                    }  
                    
                }
            }
            session_destroy();
       ?>
        
        
    </main>
    
</body>
<script>
  
</script>
</html>