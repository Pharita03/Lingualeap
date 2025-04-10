
<?php
    require("../component/connect.php");
   
?>
<?php
     
     $sql2 = "SELECT answer,numquiz FROM testvocab WHERE unitID = 3";
     $resulted = mysqli_query($connection, $sql2);
     $rows = mysqli_fetch_all($resulted, MYSQLI_ASSOC);
     $answers = array();
     $userAns = array(); 
     $score = 0;
     foreach ($rows as $row):
        $answers[] = [(int)$row["numquiz"],$row["answer"]];
     endforeach ;
     sort($answers);
     foreach ($answers as $chiose):
        echo json_encode($chiose);
     endforeach;
     
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $elapsedTime = isset($_POST['elapsedTime']) ? intval($_POST['elapsedTime']) : 0;
        $timeused = 60*10 - $elapsedTime;
        $minutes = floor($timeused / 60);
        $seconds = $timeused % 60;
        
        echo"เข้าอยู่";
        $no1 = $_POST['1'];
        $no2 = $_POST['2'];
        $no3 = $_POST['3'];
        $no4 = $_POST['4'];
        $no5 = $_POST['5'];
        $no6 = $_POST['6'];
        $no7 = $_POST['7'];
        $no8 = $_POST['8'];
        $no9 = $_POST['9'];
        $no10 = $_POST['10'];
        array_push($userAns,$no1,$no2,$no3,$no4,$no5,$no6,$no7,$no8,$no9,$no10);
        for ($x = 0; $x<=9; $x++){
            //echo $answers[$x][1];
            if ($answers[$x][1]===$userAns[$x]){
                $score += 1;
            }
        }
        echo "you got $score";
    }

?>
<html>
    <form method="POST">
        <label><input type="radio" name="1" value="A"> A) revise</label><br>
        <label><input type="radio" name="2" value="B"> B) determine</label><br>
        <label><input type="radio" name="3" value="C"> C) serve</label><br>
        <label><input type="radio" name="4" value="D"> D) direct</label><br>
        <label><input type="radio" name="5" value="A"> A) revise</label><br>
        <label><input type="radio" name="6" value="B"> B) determine</label><br>
        <label><input type="radio" name="7" value="C"> C) serve</label><br>
        <label><input type="radio" name="8" value="D"> D) direct</label><br>
        <label><input type="radio" name="9" value="C"> C) serve</label><br>
        <label><input type="radio" name="10" value="D"> D) direct</label><br>
        <button type="submit" id="submit-btn" class="" name="submit">Submit</button>
    </form>
</html>