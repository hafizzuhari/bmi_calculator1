<?php
$berat = 0;
$tinggi = 0;
$bmi = "";
$statusbmi = "";

if (isset($_POST["calculate"])) {
    $berat = $_POST["berat"];
    $tinggi = $_POST["tinggi"];

    function calculateBMI(int $berat, int $tinggi)
    {
        $bmi = $berat / ($tinggi ^ 2);
        return $bmi;
    }



    $bmi = calculateBMI($berat, $tinggi);

    if ($bmi <= 18.5) $statusbmi = "Underweight";
    else if ($bmi > 18.5 && $bmi <= 25) $statusbmi = "Normal Weight";
    else if ($bmi > 25 && $bmi <= 30) $statusbmi = "Overweight";
    else if ($bmi > 30 && $bmi <= 40) $statusbmi = "Obese";
    else $statusbmi = "Severely Obese";
}


?>

<!DOCTYPE html>
<html>
<style>
    #allstyle {
        font-family: Helvetica;
        font-size: 12px;
        text-align: center;
        padding-top: 50px;
    }

    #divbox1 {
        margin: 20px;
        border: 2px;
        border-style: solid;
        border-color: red;
        border-spacing: 15px;
    }

    #divbox2 {
        margin: 20px;
        border: 2px;

    }

    #divbox3 {
        margin: 20px;
        border: 2px;
        border-style: solid;
        border-color: blue;
        border-spacing: 15px;
    }
</style>

<body id="allstyle">
    <div id="divbox2">
        BMI Calculator
    </div>
    <form method="POST" action="">
        <div id="divbox1">
            Weight: <input type="text" name="berat" value="">
        </div>
        <div id="divbox3">
            Height: <input type="text" name="tinggi" value="">
        </div>
        <div id="divbox2">
            <input type="submit" name="calculate" value="calculate">
            <input type="reset" name="clear" value="clear">
        </div>
    </form>

    <?php



    echo "<br>BMI value : " . $bmi .
        "<br><br>Status : ";
    echo "$statusbmi";
    ?>


</body>



</html>