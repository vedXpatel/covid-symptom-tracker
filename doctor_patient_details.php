<!doctype html>
<html lang="en">
  <head>
    <title>Patient Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/patientDetails.css">
  </head>
  <body>
      <h1 class="dashboard-title">Patient Details</h1>
      <h3>Patient Id:</h3>
      <h3>Name: </h3>
      <h3>Age: </h3>
      <h3>Sex: </h3>
      <h3>Blood Group: </h3>
      <br><br>
      <h1  class="dashboard-title">Daily Symptoms</h1>
    
      <table>
        <thead>
          <tr>
            <th>Date</th>
            <th>Body Temperature</th>
            <th>Oxygen Saturation</th>
            <th>Fatigue</th>
            <th>Loss of Smell</th>
            <th>Loss of Taste</th>
            <th>Others</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td>01/01/2022</td>
              <td>98.7F</td>
              <td>99%</td>
              <td>Yes</td>
              <td>Yes</td>
              <td>No</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium illum facere repellat reiciendis nesciunt ab obcaecati consectetu.</td>
            </tr>
            <tr>
              <td>02/01/2022</td>
              <td>97.2F</td>
              <td>94%</td>
              <td>No</td>
              <td>Yes</td>
              <td>No</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium illum facere repellat reiciendis nesciunt ab obcaecati consectetu.</td>
            </tr>
            <tr>
                <td>03/01/2022</td>
                <td>102.7F</td>
                <td>93%</td>
                <td>No</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium illum facere repellat reiciendis nesciunt ab obcaecati consectetu.</td>
            </tr>
            <tr>
                <td>04/01/2022</td>
                <td>32.7F</td>
                <td>99%</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>No</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium illum facere repellat reiciendis nesciunt ab obcaecati consectetu.</td>
        </tr>
        </tbody>
      </table>
      <br><br>

      <h2 class="dashboard-title">Prescribe Medicine</h2>
      <form action="">
          <label class="input-label" class="input-label" for="">Date</label>
          <input class="input" type="date">
          <br>
          <br>
          <label class="input-label" for="">Prescription Id</label>
          <input class="input" type="number">
          <br>
          <br>
          <label class="input-label" for="">Medicines: </label>
          <br>
          <textarea name="" id="" cols="30" rows="5"></textarea>
          <br>
          <br>
          <button class="button">Submit</button>
      </form>

  </body>
</html>