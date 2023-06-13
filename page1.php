<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['age'] = isset($_POST['age']) ? $_POST['age'] : '';
    $_SESSION['gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';

    header("Location: page2.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registration Form - Page 1</title>
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Welcome to Indian Strategems</h1>
    </header>

    <form action="page1.php" method="POST" class="form1">
      <label for="age" class="age">Age:</label>
      <input type="number" id="age" name="age" min="0" max="100" required class="age" placeholder="Enter your Age">

      <label for="gender" class="gender">Gender:</label>
      <select id="gender" name="gender" required class="gender"> 
        <option value="">--Please select--</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="others">Others</option>
      </select>

      <button type="submit">Next</button>
      <button type="reset">Reset Form</button>
      <a href="Total_Schemes.html" class="button">Skip to Schemes</a>
    </form>

    <footer>
      <div> <a href="" class="extra">Reach Us</a> </div>
      <div> <a href="Disclaimer.html" class="extra">Disclaimer</a> </div>
      <div> <a href="Terms&Conditions.html" class="extra">Terms & Conditions</a>  </div>
      <div> <a href="FAQs.html" class="extra">FAQs</a> </div>
      <div> <a href="" class="extra">Contact Us</a> </div>
    </footer>
    
  </div>
</body>
</html>
