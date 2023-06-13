<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['student'] = isset($_POST['student']) ? $_POST['student'] : '';
    $_SESSION['sports'] = isset($_POST['sports']) ? $_POST['sports'] : '';

    // Assuming you have already established a database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "indian_strategems";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve the form data from session
    $age = $_SESSION['age'];
    $gender = $_SESSION['gender'];
    $state = $_SESSION['state'];
    $area = $_SESSION['area'];
    $caste = $_SESSION['caste'];
    $religion = $_SESSION['religion'];
    $medical = $_SESSION['medical'];
    $student = $_SESSION['student'];
    $sports = $_SESSION['sports'];

    // Insert the form data into the "userdata" table
    $sql = "INSERT INTO userdata (age, gender, state, area, caste, religion, medical, student, sports)
            VALUES ('$age', '$gender', '$state', '$area', '$caste', '$religion', '$medical', '$student', '$sports')";

     if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    $nextPage = '';
    if ($medical === 'yes' && $student === 'no' && $sports === 'no') {
      $nextPage = 'Health_Schemes.html';
    }

    else if ($student === 'yes' && $medical === 'no' && $sports === 'no') {
      $nextPage = 'Educational_Schemes.html';
    }

    else if ($sports === 'yes' && $medical === 'no' && $student === 'no') {
      $nextPage = 'Sports_Schemes.html';
    }

    else if ($medical === 'yes' && $student === 'yes' && $sports === 'no') {
      $nextPage = 'Health_Educational_Schemes.html';
    }

    else if ($medical === 'yes' && $sports === 'yes' && $student === 'no') {
      $nextPage = 'Sports_Health_Schemes.html';
    }

    else if ($student === 'yes' && $sports === 'yes' && $medical === 'no') {
      $nextPage = 'Education_Sports_Schemes.html';
    }

    else if ($medical === 'yes' && $sports === 'yes' && $medical === 'yes') {
      $nextPage = 'Sports_Educational_Health_Schemes.html';
    }
    else {
      $nextPage = 'Other_Schemes.html';
    }
    
    // Redirect to the appropriate page
    header('Location: ' . $nextPage);
    exit();

    // Close the database connection
    mysqli_close($conn);

    // Clear the session data
    session_unset();
    session_destroy();

    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Registration Form - Page 4</title>
  <link rel="stylesheet" href="css/form.css" />
</head>
<body>
  <div class="container">
    <header>
      <h1>Welcome to Indian Strategems</h1>
    </header>

    <form action="page4.php" method="POST">
      <label for="student" class="student">Are you a Student?</label>
      <div class="radio-container">
        <input type="radio" id="student-yes" name="student" value="yes" class="options">
        <label for="student-yes" class="options">Yes</label>
        <input type="radio" id="student-no" name="student" value="no" class="options">
        <label for="student-no" class="options">No</label> 
      </div>

      <label for="sports" class="sports">Are you Interested in Sports?</label>
      <div class="radio-container">
        <input type="radio" id="sports-yes" name="sports" value="yes">
        <label for="sports-yes" class="options">Yes</label>
        <input type="radio" id="sports-no" name="sports" value="no">
        <label for="sports-no" class="options">No</label>
      </div>

      <button type="submit">Submit</button>
      <button type="reset">Reset Form</button>
    </form>

    <footer>
      <div> <a href="" class="extra">Reach Us</a> </div>
      <div> <a href="Disclaimer.html" class="extra">Disclaimer</a> </div>
      <div> <a href="Terms&Conditions.html" class="extra">Terms & Conditions</a>  </div>
      <div> <a href="FAQs.html" class="extra">FAQs</a> </div>
      <div> <a href="" class="extra">Contact Us</a> </div>
    </footer>
  </div>

  <script>
    function submitForm() {
    document.getElementById('myForm').submit();
  }
  </script>

</body>
</html>
