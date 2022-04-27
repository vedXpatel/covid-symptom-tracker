<?php
$login = false;
$showError = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include 'partials/_dbconnect.php';
    $PatientId = $_POST['patientId'];  
    $userPass = $_POST['userPass'];
    $sql = "Select * from userpatient where PatientId ='$PatientId' AND PatientPassword ='$userPass'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num==1)
    {
       $login = true;
       session_start();
       $_SESSION['loggedin'] = true;
       $_SESSION['patientId'] = $PatientId;
       $_SESSION['userName'] = $userName;
       $_SESSION['userAge'] = $userAge; 
       $_SESSION['userSex'] = $userSex; 
       $_SESSION['userBg'] = $userBg; 
       $_SESSION['userWeight'] = $userWeight; 
       $_SESSION['userHeight'] = $userHeight; 
       header("location: patient_landing.php");
    }
    else{
        $showError ="Invalid Credentials!!!";
    }
 } 

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
    <!-- bootstrap
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="title">
      <h1>Covid-19 Tracker</h1>
    </div>
    <br>
    <br>
    <form action="/covidSym/login.php" class="login-form input-group" method="post">
        <h2 class="login-title">Login</h2>
        <label for="" class="input-label">Patient Id</label>
        <input type="text" name="patientId" />
        <br>
        <br>
        <label for="" class="input-label">Password</label>
        <input type="password" name="userPass"/>
        <br><br>
        <button class="button">Submit</button>
        <br>
        <p class="input-label">Not signed In ?</p>
        <button class="button"><a href="/covidSym/signup.php">Sign Up</a></button>
     </form>

</body>
</html>
