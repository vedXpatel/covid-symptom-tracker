<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $showAlert = true;
    include 'partials/_dbconnect.php';
    $userName = $_POST['userName']; 
    $userAge = $_POST['userAge']; 
    $userSex = $_POST['userSex']; 
    $userBg = $_POST['userBg']; 
    $userHeight = $_POST['userHeight']; 
    $userWeight = $_POST['userWeight']; 
    $userDob = $_POST['userDob']; 
    $userPass = $_POST['userPass'];
    $exists = false;
    if($exists==false)
    {
       $sql = "INSERT INTO `userpatient` ( `PatientName`, `PatientAge`, `PatientSex`, `PatientBg`, `PatientHeight`, `PatientWeight`, `PatientDob`, `PatientPassword`) VALUES ( '$userName ', '$userAge', '$userSex', '$userBg', '$userHeight', '$userWeight', '$userDob', '$userPass')";
       $result = mysqli_query($conn,$sql);
       if($result){
           $showAlert = false;
       }
    }
    if($showAlert == false)
    {
      echo "success";
    }
    else{
        echo "there was an error while creating this account";
    }
 } 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="title">
        <h1 >Covid-19 Tracker</h1>
    </div>
    <br>
    <form action="/covidSym/signup.php" class="login-form" method ="post">
        <h2 class="login-title">Sign-Up</h2>
        <label class="input-label" for="">Name</label>
        <input type="text" name ="userName">
        <br>
        <br>
        <label class="input-label" for="">Age</label>
        <input type="number" name="userAge">
        <br>
        <br>
        <label class="input-label" for="">Sex</label>
        <input type="radio" name="userSex">
        <label class="input-label" for="male">Male</label>
        <input type="radio" name="userSex">
        <label class="input-label" for="female">Female</label>
        <br>
        <br>
        <label class="input-label" for="">Blood Group</label>
        <input type="text" name="userBg">
        <br>
        <br>
        <label class="input-label" for="">Height</label>
        <input type="number" name="userHeight">
        <br>
        <br>
        <label class="input-label" for="">Weight</label>
        <input type="number" name="userWeight">
        <br>
        <br>
        <label class="input-label" for="">DOB</label>
        <input type="date" name="userDob">
        <br>
        <br>
        <label class="input-label" for="">Password</label>
        <input type="password" name="userPass">
        <button class="button">Submit</button>
    </form>
</body>
</html>