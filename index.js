function validation(){
    let hospitalName = document.getElementById("hospital").value;
    let hospitalLocation = document.getElementById("location").value;
    let name = document.getElementById("Doctor").value;
    let email = document.getElementById("email").value;
    let number = document.getElementById("number").value;
    let validated = true;

    if(hospitalName == "") {
        alert("enter hospital name");
        validated = false;
    } if(hospitalLocation == ""){
        alert("enter hospital location");
        validated = false;
    } if(name == ""){
        alert("enter doctor's name");
        validated = false;
    } if(email == ""){
        alert("enter doctor's email");
        validated = false;
    } if(isNaN(number)){
        alert("enter numeric value for mobile number");
        validated = false;
    } if(number.length != 10){
        alert("please enter a valid number");
        validated = false;
    }

    if(validated == true){
        document.getElementById("hospitalName").innerHTML = hospitalName;
        document.getElementById("hospitalLocation").innerHTML = hospitalLocation;
        document.getElementById("doctorName").innerHTML =  name;
        document.getElementById("doctorEmail").innerHTML = email;
        document.getElementById("doctorMobile").innerHTML = number;
    }
    event.preventDefault();
}
document.getElementById('submit').addEventListener("click",validation);
