<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Symptoms</title>
    <link rel="stylesheet" href="css/symptoms.css">
</head>
<body>
    <h1 class="dashboard-title">Daily Symptoms</h1>
    <br>
    <br>
    <form action="/covidSym/symptoms.php" method="post">
    <label for="">Body Temperature</label>
    <input type="number" name="bodyTemp">
    <br>
    <br>
    <label for="">Oxygen Saturation</label>
    <input type="number" name="oxgLvl">
    <br>
    <br>
    <label for="">Do you have cough?</label>
    <input type="radio" name="cough">
    <label for="yesCough">Yes</label>
    <input type="radio" name="cough">  
    <label for="noCough">No</label>
    <br>
    <br>
    <label for="">Fatigue ?</label>
    <input type="radio" name="fatigue">
    <label for="yesFatigue">Yes</label>
    <input type="radio" name="fatigue">  
    <label for="noFatigue">No</label>
    <br>
    <br>
    <label for="">Loss of smell ?</label>
    <input type="radio" name="smell">
    <label for="yesSmell">Yes</label>
    <input type="radio" name="smell">  
    <label for="noSmell">No</label>
    <br>
    <br>
    <label for="">Loss of taste ?</label>
    <input type="radio" name="taste">
    <label for="yesTaste">Yes</label>
    <input type="radio" name="taste">  
    <label for="noTaste">No</label>
    <br>
    <br>
    <label for="">Other Symptoms: </label>
    <br>
    <textarea name="otherSym" id="" cols="30" rows="5"></textarea>
    <br>
    <br>
    <button>Submit</button>
    </form>

    <?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $bodyTemp = $_POST['bodyTemp']; 
    $oxgLvl = $_POST['oxgLvl']; 
    $userCough = $_POST['cough']; 
    $userFatigue = $_POST['fatigue']; 
    $userSmell = $_POST['smell']; 
    $userTaste = $_POST['taste']; 
    $userSym = $_POST['otherSym']; 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "covidsymtracker";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Sorry we failed to establish the connection". mysqli_connect_error());
    }
    else
    {

        $sql = "INSERT INTO `dailysymptoms` (`bodyTemp`, `oxySaturation`, `cough`, `fatigue`, `smell`, `taste`, `otherSym`) VALUES ( '$bodyTemp', '$oxgLvl', '$userCough', '$userFatigue', '$userSmell', '$userTaste', '$userSym')";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            echo "the insertion was successfull";
        }
        else
        {
            echo "there was an error while insertion " .mysqli_error($conn);
        }
    }


}
?>
</body>
</html>